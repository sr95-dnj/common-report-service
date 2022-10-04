<?php

namespace App\Models\Project_info\MidTermBudgetFramework;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project_info\OperationActivities\OperationActivities;
use App\Models\Project_info\MidTermBudgetFramework\MidTermBudgetFrameworkDeiail;
use App\Traits\SecureDelete;

class MidTermBudgetFramework extends Model
{
    protected $table = 'fin_mang_mid_term_project_budgets';
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'operation_act_id', 
        'finanacial_year',
        'budget_category',
        'year_from_date',
        'year_to_date',
        'document_name',        
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function proInfo()
    {
        return $this->belongsTo(OperationActivities::class, 'operation_act_id');
    }

    public function ProBudgetDetail()
    {
        return $this->hasMany(MidTermBudgetFrameworkDeiail::class, 'proj_budget_id');
    }
}
