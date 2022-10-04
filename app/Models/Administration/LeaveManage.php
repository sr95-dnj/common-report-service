<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveManage extends Model
{
    use SoftDeletes;

    protected $table = "admin_leave_manages";

}
