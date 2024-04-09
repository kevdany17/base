<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationRecord extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'count', 'month', 'year'];
}
