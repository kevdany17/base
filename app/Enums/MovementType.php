<?php

namespace App\Enums;

enum MovementType: string {
	case ENTRY = "E";
	case OUTPUT = "S";
	case TRANSFER = "T";
}
