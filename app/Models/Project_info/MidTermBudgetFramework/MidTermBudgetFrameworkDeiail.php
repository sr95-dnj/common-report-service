<?php

namespace App\Models\Project_info\MidTermBudgetFramework;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MidTermBudgetFrameworkDeiail extends Model
{
	protected $table = 'fin_mang_mt_budget_framework_deiails';
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'proj_budget_id',
		'finanacial_year',
		'start_date',
		'end_date',
		'eco_code',
		'account_name',
		//'unit_id', // delete for 2nd UAT
		//'quantity',
		'gob_amount',
		'ida_amount',
		'total_amount',
		'is_active',
		'created_by',
		'updated_by',
		'deleted_by',
	];
}
