<?php

namespace App\Models\Asset;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class AssetSubCategory extends Model
{
    use SoftDeletes, SecureDelete;
    //
    protected $fillable = [
        'operation_id',
        'cat_id',
        'sub_cat_name',
        'is_active',
        'created_at',
        'updated_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_by',
        'deleted_at'
    ];
    public function assetItemInfo()
    {
        return $this->hasMany(AssetItem::class, 'sub_cat_id', 'id');
    }
}
