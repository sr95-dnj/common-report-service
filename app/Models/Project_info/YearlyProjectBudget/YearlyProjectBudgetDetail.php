<?php

namespace App\Models\Project_info\YearlyProjectBudget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class YearlyProjectBudgetDetail extends Model
{
	protected $table = 'pro_info_yearly_project_budget_details';
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'yProj_budget_id',
		'eco_code',
		'account_name',
		'unit',
		'quantity',
		'gob_amount',
		'ida_amount',
		'total',
		'revision',
		'revision_date',
		'date',
		'is_active',
		'created_by',
		'updated_by',
	];
}
