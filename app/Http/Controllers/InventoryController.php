<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use App\Services\Inventory\GetHistoryService;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use App\Services\Inventory\StoreService;
use App\Traits\LogErrorTrait;

class InventoryController extends VoyagerBaseController
{
	use LogErrorTrait;

	private $storeService;
	private $getHistoryService;

	public function __construct(StoreService $storeService, GetHistoryService $getHistoryService)
	{
		$this->storeService = $storeService;
		$this->getHistoryService = $getHistoryService;
	}

	public function store(Request $request)
	{
		$data = [];
		try {
			$dto = new LogErrorDto();

			$jsonData = (object) $request->all();
			$this->storeService->run($jsonData);

			$data =  [
				'message'    => "Inventario actualizado con éxito",
				'alert-type' => 'success',
			];
		} catch (ServiceException $ex) {
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto, $ex->getType());
			$data = [
				'message'    => $ex->getMessage(),
				'alert-type' => 'error',
			];
		} finally {
			return redirect()->route("voyager.inventories.index")->with($data);
		}
	}

	public function historyByInventory(Request $request, $id)
	{
		$data = [];
		try {
			$dto = new LogErrorDto();

			$data = $this->getHistoryService->run($id);
		} catch (ServiceException $ex) {
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto, $ex->getType());
		} finally {
			return view('vendor.voyager.inventories.history', compact('data'));
		}
	}
}
