<?php

namespace App\Services\Inventory;

use App\Models\InventoryHistory;
use App\Enums\ErrorLog;
use App\Exceptions\ServiceException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Exception;

class GetHistoryService
{
	public function run($id)
	{
		try {
			return InventoryHistory::where('inventory_id', '=', $id)->get();
		} catch (QueryException $ex) {
			throw new ServiceException("Ocurrió un error en la consulta: {$ex->getMessage()}", ErrorLog::SQL);
		} catch (Exception $ex) {
			throw new ServiceException("Ocurrió un error interno: {$ex->getMessage()}", ErrorLog::ERROR);
		}
	}
}
