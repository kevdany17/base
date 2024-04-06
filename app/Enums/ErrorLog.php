<?php

namespace App\Enums;

enum ErrorLog: string {
	case ERROR = 'error';
	case SQL = 'sql';
	case USAGE = 'usage';
	case VALIDATION = 'validation';
}
