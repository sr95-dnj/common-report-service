<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OutsourceStaff extends Model
{
    use SoftDeletes;

    protected $table = 'admin_outsource_staffs';
}
