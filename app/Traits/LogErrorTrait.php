<?php

namespace App\Traits;

use App\Models\LogError;
use App\Dtos\LogErrorDto;
use App\Enums\ErrorLog;

trait LogErrorTrait
{
    public function logError(LogErrorDto $dto){
       $this->_create($dto, ErrorLog::Error);
    }

    public function logErrorSql(LogErrorDto $dto){
		$this->_create($dto, ErrorLog::SQL);
    }

    public function logUsage(LogErrorDto $dto){
		$this->_create($dto, ErrorLog::Usage);
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
