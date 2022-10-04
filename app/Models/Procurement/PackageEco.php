<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageEco extends Model
{
	use SoftDeletes;
    protected $table = 'proc_package_eco';
	

}
