<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleInfo extends Model
{
    use SoftDeletes;

    protected $table = 'admin_vehicle_infos';
}
