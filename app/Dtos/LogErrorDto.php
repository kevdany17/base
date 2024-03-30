<?php

namespace App\Dtos;

class LogErrorDto {
	public string $url;
	public string $description;
	public $request;
	public $response;
	public string $status;
}
