<?php

namespace App\Exceptions;

use App\Enums\ErrorLog;
use Exception;

class ServiceException extends Exception
{
    protected $type;

    public function __construct($message = "", ErrorLog $type)
    {
        $this->type = $type;
        parent::__construct($message);
    }

    public function getType()
    {
        return $this->type;
    }
}
