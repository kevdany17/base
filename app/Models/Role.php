<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends \TCG\Voyager\Models\Role
{
    use HasFactory;

    public function scopeRoles($query)
    {
        // return $query->where('name', '<>', 'support');
    }
}
