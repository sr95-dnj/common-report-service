<?php

namespace App\Models\Lending;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lending\SubProjectInfo; 
use App\Traits\SecureDelete;

class Location extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_locations';

    protected $fillable = [
    	'location_name',
		'is_active',
		'created_by',
		'updated_by',		
    ];

    public function CheckSubProjectInfo()
    {
        return $this->hasMany(SubProjectInfo::class, 'location_id');
    }
}
