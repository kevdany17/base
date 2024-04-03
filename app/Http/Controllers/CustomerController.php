<?php

namespace App\Http\Controllers;

use App\Dtos\LogErrorDto;
use App\Libraries\Notifications\Mail;
use App\Models\Customer;
use App\Models\User;
use App\Services\Customer\StoreService;
use App\Services\Customer\UpdateService;
use App\Traits\JsonRespondController;
use App\Traits\LogErrorTrait;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Impulzo\RestClientService\Libraries\Facade\RestClientFacade;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Models\Setting;

class CustomerController extends VoyagerBaseController
{
	use JsonRespondController, LogErrorTrait;

	private $storeService;
	private $updateService;

	public function __construct(StoreService $storeService, UpdateService $updateService){
		$this->storeService = $storeService;
		$this->updateService = $updateService;
	}

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
			$company = Setting::find(1);

			$data = [
                'name' => $request->first_name . ' ' . $request->last_name,
                'company' => $company->value,
                'user' => $request->user,
                'password' => $request->password
            ];

			$jsonData = json_decode($request->getContent());
			$this->storeService->run($jsonData);

            $mail = new Mail();
            $mail->send([$request->user], 'CREDENCIALES DE ACCESO', view('mail.credentials', $data)->render());

			DB::commit();
            return $this->respondMessage('Datos guardados con éxito');
        }catch (QueryException $ex) {
			DB::rollBack();
			$dto = new LogErrorDto();
			$dto->url = $request->url();
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logErrorSql($dto);
            return $this->respondInvalidQuery('Ocurrió un error la consulta: ' . $ex->getMessage());
        } catch (\Exception $ex) {
			DB::rollBack();
			$dto = new LogErrorDto();
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto);
            return $this->respondInternalError('Ocurrió un error interno: ' . $ex->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
			$jsonData = json_decode($request->getContent());
			$this->updateService->run($jsonData, $id);

			DB::commit();
            return $this->respondMessage('Datos guardados con éxito');
        }catch (QueryException $ex) {
			DB::rollBack();
			$dto = new LogErrorDto();
			$dto->url = $request->url();
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logErrorSql($dto);
            return $this->respondInvalidQuery('Ocurrió un error la consulta: ' . $ex->getMessage());
        } catch (\Exception $ex) {
			DB::rollBack();
			$dto = new LogErrorDto();
			$dto->url = $request->path();
			$dto->description = "STORE";
			$dto->request = json_encode($request->json);
			$dto->response = $ex->getMessage();
			$dto->status = 500;
			$this->logError($dto);
            return $this->respondInternalError('Ocurrió un error interno: ' . $ex->getMessage());
        }
    }
}
