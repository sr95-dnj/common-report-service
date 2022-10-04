<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetMovement extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'operation_id',
        'asset_id',
        'asset_code',
        'asset_location_id',
        'employee_id',
        'new_asset_location_id',
        'new_employee_id',
        'issue_date',
        'close_date',
        'asset_status',
        'issue_status',
        'asset_location',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',

    ];
}
