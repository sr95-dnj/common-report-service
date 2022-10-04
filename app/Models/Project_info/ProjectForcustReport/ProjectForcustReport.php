<?php

namespace App\Models\Project_info\ProjectForcustReport;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project_info\OperationActivities\OperationActivities;
use App\Models\Project_info\ProjectForcustReport\ProjectForcustReportDetail;
use App\Traits\SecureDelete;

class ProjectForcustReport extends Model
{
    protected $table = 'project_forcust_reports';
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'operation_act_id', 
        'years',
        'start_date',
        'end_date',

        'Q1_total_A',
        'Q1_total_B',
        'Q2_total_A',
        'Q2_total_B',
        'Q3_total_A',
        'Q3_total_B',
        'Q4_total_A',
        'Q4_total_B',
                
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
   
}
