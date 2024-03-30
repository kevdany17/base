<?php
namespace App\Services\Inventory;

use Illuminate\Support\Facades\DB;

class StoreService {
	public function run($request) :void {
		$data = [];
        $flag = true;
		DB::beginTransaction();
        try {
            // $json = json_decode($request);
            // $movement = MovementType::find($request->movement_types_id);
            // foreach ($json as $item) {
            //     $product = Inventory::find($item->id);
            //     if ($movement->type == "E") {
            //         $product->stock += $item->quantity;
            //     } else if ($movement->type == "S") {
            //         if ($item->quantity <= $product->stock) {
            //             $product->stock -= $item->quantity;
            //         } else {
            //             $flag = false;
            //             $data =  [
            //                 'message'    => "La cantidad de salida supera la cantidad actual del producto " .
            //                                  $product->product->name . " en la sucursal " .
            //                                  $product->sucursal->name,
            //                 'alert-type' => 'error',
            //             ];
            //             break;
            //         }
            //     } else if ($movement->type == "T") {
            //         if($product->office_id == $item->office_id){
            //             $flag = false;
            //             $data =  [
            //                 'message'    => "La sucursal de traspaso debe ser diferente a la sucursal origen del producto " .
            //                                  $product->product->name . " en la sucursal " . $product->sucursal->name,
            //                 'alert-type' => 'error',
            //             ];
            //             break;
            //         }else if ($item->quantity <= $product->stock) {
            //             $product->stock -= $item->quantity;
            //             $product_transfer = Inventory::where('product_id', '=', $product->product_id)
            //                  ->where('office_id', '=', $item->office_id)->first();
            //             $product_transfer->stock += $item->quantity;
            //             $product_transfer->update();
            //         } else {
            //             $flag = false;
            //             $data =  [
            //                 'message'    => "La cantidad de salida supera la cantidad actual del producto " .
            //                                  $product->product->name . " en la sucursal " . $product->sucursal->name,
            //                 'alert-type' => 'error',
            //             ];
            //             break;
            //         }
            //     }
            //     if ($flag) {
            //         $product->update();
            //         InventoryHistory::create([
            //             'movement_types_id' => $request->movement_types_id,
            //             'notes' => $item->note,
            //             'quantity' => $item->quantity,
            //             'movement_date' => $request->movement_date,
            //             'inventory_id' => $item->id,
            //             'office_transfer_id' => isset($item->office_id) ? $item->office_id : null,
            //             'user_id' => Auth::user()->id,
            //         ]);
            //     }
            // }
            // if ($flag) {
            //     DB::commit();
            //     $data =  [
            //         'message'    => "Inventario actualizado",
            //         'alert-type' => 'success',
            //     ];
            // }
        } catch (Exception $ex) {
            DB::rollBack();
        }
	}
}
