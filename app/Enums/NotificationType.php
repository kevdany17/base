<?php

namespace App\Enums;

enum NotificationType: string {
	case Mail = 'mail';
	case SMS = 'sms';
	case WHATSAPP = 'WhatsApp';
}
