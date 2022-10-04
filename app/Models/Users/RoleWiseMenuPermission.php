<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class RoleWiseMenuPermission extends Model
{
    protected $fillable = [  
          
        'role_id',
        'submenu_id',
        'read',
        'save',
        'update',
        'delete',
        'active',
        'created_by',
        'updated_by'
    ];
}
