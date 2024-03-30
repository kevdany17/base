<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogError extends Model
{
    use HasFactory;

    protected $fillable = [
        'url', 'type', 'description', 'request', 'response', 'status'
    ];
}
