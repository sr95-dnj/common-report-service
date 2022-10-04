<?php

namespace App\Models\Lending\Sector;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lending\SubProjectInfo;
use App\Traits\SecureDelete;

class SubSector extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_sub_sectors';

    protected $fillable = [
    	'sector_id',
		'sub_sector_name',
		'is_active',
		'created_by',
		'updated_by',		
    ];

    public function SubProjInfo()
    {
        return $this->hasMany(SubProjectInfo::class, 'sub_sector_id');
    }
}
