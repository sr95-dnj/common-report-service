<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Asset\AssetMaster;
use App\Models\Asset\AssetMovement;
use App\Traits\SecureDelete;

class AssetLocation extends Model
{
    use SoftDeletes, SecureDelete;

    protected $fillable = [
        'operation_id',
        'location_name',
        'is_active',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function assetMasterInfo()
    {
        return $this->hasMany(AssetMaster::class, 'asset_location', 'id');
    }
    public function assetMovementInfo()
    {
        return $this->hasMany(AssetMovement::class, 'asset_location_id', 'id');
    }
}
