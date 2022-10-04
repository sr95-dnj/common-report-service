<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Asset\AssetSubCategory;
use App\Models\Asset\AssetItem;
use App\Traits\SecureDelete;
use App\Models\Administration\VehicleInfo;

class AssetCategory extends Model

{
    use SoftDeletes, SecureDelete;

    protected $fillable = [
        'operation_id',
        'cat_no',
        'cat_name',
        'economic_id',
        'economic_code',
        'eco_name',
        'is_active',
        'created_at',
        'updated_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_by',
        'deleted_at'
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function economic_info()
    {
        return $this->hasOne('App\Models\Project_info\EconomyCodeInfo', 'id', 'economic_id');
    }
    public function subcatinfo()
    {
        return $this->hasMany(AssetSubCategory::class, 'cat_id', 'id');
    }
    public function assetItemInfo()
    {
        return $this->hasMany(AssetItem::class, 'cat_id', 'id');
    }
    //check soft-delete validation in administration vechicle info
    public function assetAdminInfo()
    {
        return $this->hasMany(VehicleInfo::class, 'asset_id');
    }
}
