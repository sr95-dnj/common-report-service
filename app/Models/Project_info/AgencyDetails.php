<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgencyDetails extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_agency_details';
    
    protected $fillable = [
    	'project_id',
    	'dev_partner_id',
        'created_by',
        'updated_by'
    ];
}
