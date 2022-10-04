<?php

namespace App\Models\Project_info\ProjectBudget;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectBudgetDetail extends Model
{
	protected $table = 'pro_info_project_budget_details';
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'proj_budget_id',
		'eco_code',
		'account_name',
		'unit',
		'quantity',
		'gob_amount',
		'ida_amount',
		'total',
		'revision',	
		'remarks',	
		'is_active',
		'created_by',
		'updated_by',
	];
}
