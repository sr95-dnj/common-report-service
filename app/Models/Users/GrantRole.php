<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class GrantRole extends Model
{
    protected $fillable = [
        'user_id',
        'role_id',
        'active',
        'created_by',
        'updated_by'
    ];
}
