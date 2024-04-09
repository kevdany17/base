<?php

namespace App\Traits;

use App\Models\LogError;
use App\Dtos\LogErrorDto;
use App\Enums\ErrorLog;

trait LogErrorTrait
{
    public function logError(LogErrorDto $dto, ErrorLog $type){
		$this->_create($dto, $type);
    }

    public function logUsage(LogErrorDto $dto){
		$this->_create($dto, ErrorLog::USAGE);
    }

	private  function _create(LogErrorDto $dto, $type){
		LogError::create([
            'url' => $dto->url,
            'type' => $type,
            'description' => $dto->description,
            'request' => $dto->request,
            'response' => $dto->response,
            'status' => $dto->status
        ]);
	}
}
