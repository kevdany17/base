<?php

namespace App\Enums;

enum NotificationType: string {
	case MAIL = 'mail';
	case SMS = 'sms';
	case WHATSAPP = 'WhatsApp';
}
