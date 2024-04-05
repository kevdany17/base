<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Exceptions\ServiceException;
use App\Libraries\Notifications\Mail;
use App\Services\Customer\StoreService;
use App\Services\Customer\UpdateService;
use App\Traits\JsonRespondController;
use App\Traits\LogErrorTrait;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Setting;

class CustomerController extends VoyagerBaseController
{
	use JsonRespondController, LogErrorTrait;

	private $storeService;
	private $updateService;

	public function __construct(StoreService $storeService, UpdateService $updateService)
	{
		$this->storeService = $storeService;
		$this->updateService = $updateService;
	}

	public function store(Request $request)
	{
		try {
			$dto = new LogErrorDto();

			$jsonData = json_decode($request->getContent());
			$this->storeService->run($jsonData);

			$company = Setting::find(1);
			$data = [
				'name' => $request->first_name . ' ' . $request->last_name,
				'company' => $company->value,
				'user' => $request->user,
				'password' => $request->password
			];

			$mail = new Mail();
			$mail->send([$request->user], 'CREDENCIALES DE ACCESO', view('mail.credentials', $data)->render());

			return $this->respondMessage('Datos guardados con éxito');
		} catch (ServiceException $ex) {
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto, $ex->getType());
			return $this->respondInternalError($ex->getMessage());
		}
	}

	public function update(Request $request, $id)
	{
		try {
			$dto = new LogErrorDto();

			$jsonData = json_decode($request->getContent());
			$this->updateService->run($jsonData, $id);

			return $this->respondMessage('Datos guardados con éxito');
		} catch (ServiceException $ex) {
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto, $ex->getType());
			return $this->respondInternalError($ex->getMessage());
		}
	}
}
