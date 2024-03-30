<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryHistory;
use App\Models\MovementType;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Services\Inventory\StoreService;

class InventoryController extends VoyagerBaseController
{
	private $storeService;

	public function __construct(StoreService $storeService){
		$this->storeService = $storeService;
	}

    public function store(Request $request)
    {
        try {
            $this->storeService->execute($request->json);
        } catch (Exception $ex) {
            $data = [
                'message'    => "No fue posible registrar los movimientos de inventario",
                'alert-type' => 'error',
            ];
        } finally {
            return redirect()->route("voyager.inventories.index")->with($data);
        }
    }
}
