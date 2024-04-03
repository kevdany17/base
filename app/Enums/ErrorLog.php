<?php

namespace App\Enums;

enum ErrorLog: string {
	case Error = 'error';
	case SQL = 'sql';
	case Usage = 'usage';
}
