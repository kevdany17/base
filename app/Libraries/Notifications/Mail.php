<?php

namespace App\Libraries\Notifications;

use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Enums\NotificationType;
use App\Dtos\EmailDto;
use App\Traits\LogErrorTrait;

class Mail
{
	use LogErrorTrait;

	public static function send(EmailDto $dto)
	{
		$response = [];
		$to = $dto->to;
		$subject = $dto->subject;
		$body = $dto->body;
		try {
			FacadesMail::send([], [], function ($message) use ($to, $subject, $body) {
				$message->to($to)
					->subject($subject)
					->setBody($body, 'text/html');
			});
			$response['status'] = 204;
			$response['message'] = 'Email enviado correctamente';
		} catch (Exception $e) {
			$response['status'] = 500;
			$response['message'] = 'Error al enviar el correo: ' . $e->getMessage();
		}

		return $response;
	}
}
