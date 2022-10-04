<?php

namespace App\Models\Project_info\OperationActivities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectComponents extends Model
{
	use SoftDeletes;
    protected $dates = ['deleted_at'];    
    protected $table = "pro_info_project_components";

    protected $fillable = [
        'ida_adp_usd',
        'ida_adp_bdt',
        'ida_non_adp_usd',
        'ida_non_adp_bdt',
        'ida_usd_total',
        'ida_bdt_total',
        'gob_adp_usd',
        'gob_adp_bdt',
        'gob_non_adp_usd',
        'gob_non_adp_bdt',
        'gob_usd_total',
        'gob_bdt_total',
        'adp_usd_total',
        'adp_bdt_total',
        'non_adp_usd_total',
        'non_adp_bdt_total',
        'usd_total',
        'bdt_total',
        'revision'

        /*'operation_act_id',
        'component_name',
        'cost_usd',
        'cost_bdt',
        'revision',
        'created_by',
        'updated_by'*/
    ];
}
