<?php

namespace App\Models\Financial\FundRelease;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class BudgetWiseFundRelease extends Model
{
    protected $table = 'budget_wise_fund_releases';
    use SoftDeletes, SecureDelete;    
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'financial_year',
    	'operation_id',  
        'master_id',  	
        'eco_code_id',
        'eco_account_code',
        'yearly_pro_bud_details_id',
        'received_amount',
        'pay_gob_amount',
        'pay_ida_amount',
        'total_pay_amount',
        'is_active',
		'deleted_by',
		'created_by',
		'updated_by',		
    ];
}
