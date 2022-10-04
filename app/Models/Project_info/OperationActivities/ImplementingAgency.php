<?php

namespace App\Models\Project_info\OperationActivities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImplementingAgency extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];    
    protected $table = "pro_info_ope_acti_implementing_agencies";

    protected $fillable = [
        'operation_act_id',
        'imp_agencies_id',      
        'status',
        'created_by',
        'updated_by'
    ];
}
