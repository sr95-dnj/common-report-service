<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Asset\AssetMovement;
use App\Traits\SecureDelete;

class AssetMaster extends Model
{
    use SoftDeletes, SecureDelete;
    //

    protected $fillable = [
        'asset_code',
        'item_id',
        'operation_id',
        'purchase_date',
        'purchase_price',
        'package_no',
        'package_code',
        'asset_status',
        'asset_location',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
        'is_fixed_asset',
        'quantity',
        'unit_id'
    ];

    public function AssetMovementInfo()
    {
        return $this->hasMany(AssetMovement::class, 'asset_id', 'id');
    }
}
