<?php

namespace App\Models\Lending\Sector;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lending\Sector\SubSector;
use App\Models\Lending\SubProjectInfo;
use App\Traits\SecureDelete;

class Sector extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_sectors';

    protected $fillable = [
    	'sector_name',
		'short_name',
		'is_active',
		'created_by',
		'updated_by',		
    ];


    public function SectorDel()
    {
        return $this->hasMany(SubSector::class, 'sector_id');
    }

    public function SubProInfo()
    {
        return $this->hasMany(SubProjectInfo::class, 'sector_id');
    }
}
