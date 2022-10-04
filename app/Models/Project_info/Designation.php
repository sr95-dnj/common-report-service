<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project_info\ProjectStaffInformation;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class Designation extends Model
{	
	protected $table = 'pro_info_designations';
    use SoftDeletes, SecureDelete;    
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'designation_name',
		'is_active',
		'deleted_by',
		'created_by',
		'updated_by',		
    ];

    public function StafInfo()
    {
        return $this->hasMany(ProjectStaffInformation::class);
    }

}
