<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Asset\AssetMaster;
use App\Traits\SecureDelete;

class AssetItem extends Model
{
    use SoftDeletes, SecureDelete;
    //
    protected $fillable = [
        'operation_id',
        'item_name',
        'cat_id',
        'sub_cat_id',
        'unit_id',
        'is_fixed_asset',
        'is_active',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function assetMasterInfo()
    {
        return $this->hasMany(AssetMaster::class, 'item_id', 'id');
    }
}
