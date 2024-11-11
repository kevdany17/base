<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Traits\JsonRespondController;
use App\Traits\LogErrorTrait;
use App\Dtos\LogErrorDto;

class ApiController extends Controller
{
    use JsonRespondController, LogErrorTrait;;

	protected function logErrors($exception, $method){
		$dto = new LogErrorDto();
		$dto->url = request()->path();
		$dto->description = $method;
		$dto->request = request()->all() ? json_encode(request()->all()) : null;
		$dto->response = $exception->getMessage();
		$dto->status = $exception->getHttpCode();
		$this->logError($dto, $exception->getType());
	}
}
