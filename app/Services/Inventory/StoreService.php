<?php

namespace App\Services\Inventory;

use App\Enums\ErrorLog;
use App\Enums\MovementType as EnumsMovementType;
use App\Models\Inventory;
use App\Models\InventoryHistory;
use App\Models\MovementType;
use App\Exceptions\ServiceException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Exception;

class StoreService
{
	public function run($request): void
	{
		DB::beginTransaction();
		try {

			$json = json_decode($request->json);
			$movement = MovementType::find($request->movement_types_id);
			foreach ($json as $item) { //iteramos por todos los productos/inventarios seleccionados
				$inventory = Inventory::find($item->id); //obtenemos el registro del inventario
				switch ($movement->type) {
					case EnumsMovementType::ENTRY->value:
						$inventory->stock += $item->quantity;
						break;
					case EnumsMovementType::OUTPUT->value:
						if ($item->quantity > $inventory->stock) {
							throw new ServiceException("La cantidad de productos que intentas sacar supera la cantidad actual disponible del producto {$inventory->product->name} en la sucursal {$inventory->sucursal->name}", ErrorLog::VALIDATION);
						}
						$inventory->stock -= $item->quantity;
						break;
					case EnumsMovementType::TRANSFER->value:
						if ($inventory->office_id == $item->office_id) {
							throw new ServiceException("La sucursal de destino para el traspaso debe ser distinta a la sucursal de origen del producto {$inventory->product->name} en la sucursal {$inventory->sucursal->name}", ErrorLog::VALIDATION);
						}
						if ($item->quantity > $inventory->stock) {
							throw new ServiceException("La cantidad de productos que estás intentando transferir supera la cantidad actual disponible del producto {$inventory->product->name} en la sucursal {$inventory->sucursal->name}", ErrorLog::VALIDATION);
						}
						$inventory->stock -= $item->quantity;
						$inventory_transfer = Inventory::where('product_id', $inventory->product_id)->where('office_id', $item->office_id)->first();
						$inventory_transfer->stock += $item->quantity;
						$inventory_transfer->save();
						break;
				}
				$inventory->update();
				$this->insertHistory($request, $item);
			}
			DB::commit();
		} catch (ServiceException $ex) {
			DB::rollBack();
			throw $ex;
		} catch (QueryException $ex) {
			DB::rollBack();
			throw new ServiceException("Ocurrió un error en la consulta: {$ex->getMessage()}", ErrorLog::SQL);
		} catch (Exception $ex) {
			DB::rollBack();
			throw new ServiceException("Ocurrió un error interno: {$ex->getMessage()}", ErrorLog::ERROR);
		}
	}

	private function insertHistory($request, $item)
	{
		InventoryHistory::create([
			'movement_types_id' => $request->movement_types_id,
			'notes' => $item->note,
			'quantity' => $item->quantity,
			'movement_date' => $request->movement_date,
			'inventory_id' => $item->id,
			'office_transfer_id' => isset($item->office_id) ? $item->office_id : null,
			'user_id' => Auth::user()->id,
		]);
	}
}
