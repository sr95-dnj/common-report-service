<?php

namespace App\Models\Project_info\YearlyProjectBudget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;
use App\Models\Project_info\OperationActivities\OperationActivities;
use App\Models\Project_info\YearlyProjectBudget\YearlyProjectBudgetDetail;

class YearlyProjectBudget extends Model
{
    protected $table = 'pro_info_yearly_project_budgets';
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'operation_act_id',
        'budget_category',
        'budgeting_year',
        'start_date',
        'end_date',
        'document_name',
        'is_active',
        'created_by',
        'updated_by',
    ];
    public function proInfo()
    {
        return $this->belongsTo(OperationActivities::class, 'operation_act_id');
    }

    public function YearlyProBudget()
    {
        return $this->hasMany(YearlyProjectBudgetDetail::class, 'yProj_budget_id');
    }
}
