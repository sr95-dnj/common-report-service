<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectStaffInformation extends Model
{
    protected $table = 'pro_info_project_staff_informations';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'operation_acti_id',
        'user_id',
        'sap_id',
        'employee_name',
        'designation_id',
        'organization',
        'project_designation_id',
        'mobile_no',
        'office_phone',
        'ip_phone',
        'email',
        'project_join_date',
        'project_end_date',
        'rank',
        'is_active',
        'status',
        'created_by',
        'updated_by',
    ];
}
