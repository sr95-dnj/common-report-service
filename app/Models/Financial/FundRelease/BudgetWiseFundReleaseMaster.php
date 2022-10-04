<?php

namespace App\Models\Financial\FundRelease;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class BudgetWiseFundReleaseMaster extends Model
{
	protected $table = 'budget_wise_fund_release_masters';
	use SoftDeletes, SecureDelete;    
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'operation_id',
		'financial_year',
		'received_date',
		'is_active',
		'deleted_by',
		'created_by',
		'updated_by',		
	];
}
