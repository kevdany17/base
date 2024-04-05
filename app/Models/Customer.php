<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use HasFactory, SoftDeletes;

	protected $fillable = [
		'first_name',
		'last_name',
		'full_name',
		'gender',
		'address',
		'phone',
		'rfc',
		'reason',
		'postal_code',
		'email',
		'user_id'
	];

	public function userData()
	{
		return $this->hasOne(User::class, 'id', 'user_id');
	}
}
