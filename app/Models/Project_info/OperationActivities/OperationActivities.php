<?php

namespace App\Models\Project_info\OperationActivities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OperationActivities extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];    
    protected $table = "pro_info_operation_activities";

    protected $fillable = [
        'project_code',
        'project_name',
        'project_objectives',
        'total_project_value_usd',
        'total_project_value_bdt',
        'financing_agreement_date',
        'administration_agreement_date',
        'project_approval_date',
        'project_name_short',
        'project_start_date',
        'project_end_date',
        'project_location',
        'adp_code',
        'non_adp_code',
        'operating_activity_code',
        'single_code',
        'bd_bank',
        'finance_ministry', 
        'revision',       
        'created_by',
        'updated_by',
    ];
}
