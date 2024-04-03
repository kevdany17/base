<?php

namespace App\Libraries\Notifications;

use App\Enums\NotificationType;
use App\Models\NotificationRecord;
use App\Traits\LogErrorTrait;
use Illuminate\Support\Facades\Mail as FacadesMail;

class Mail
{
	use LogErrorTrait;

	public function send($to, $subject, $body)
	{
		$month = date('m');
		$year = date('Y');

		$response = [];

		$notification = NotificationRecord::where('month', '=', $month)->where('year', '=', $year)
			->where('type', '=', NotificationType::Mail)
			->first();

		if (!isset($notification)) {
			$notification = NotificationRecord::create([
				'type' => NotificationType::Mail,
				'count' => 0,
				'month' => $month,
				'year' => $year
			]);
		}

		FacadesMail::send([], [], function ($message) use ($to, $subject, $body) {
			$message->to($to)
				->subject($subject)
				->setBody($body, 'text/html');
		});

		$notification->count += 1;
		$notification->update();

		$response['status'] = 204;
		$response['message'] = 'Email enviado correctamente';

		return $response;
	}
}
