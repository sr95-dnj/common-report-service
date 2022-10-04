<?php

namespace App\Models\Project_info\ProjectBudget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;
use App\Models\Project_info\OperationActivities\OperationActivities;
use App\Models\Project_info\ProjectBudget\ProjectBudgetDetail;


class ProjectBudget extends Model
{
    protected $table = 'pro_info_project_budgets';
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'operation_act_id', 
        'budget_category',
        'inception_date',
        'closing_date',
        'budget_date',
        'document_name',
        'remarks',
        'is_active',
        'created_by',
        'updated_by',
    ];

    public function proInfo()
    {
        return $this->belongsTo(OperationActivities::class, 'operation_act_id');
    }

    public function ProjectBudgetMethod()
    {
        return $this->hasMany(ProjectBudgetDetail::class, 'proj_budget_id');
    }
}
