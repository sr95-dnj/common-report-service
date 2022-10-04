<?php

namespace App\Models\Lending\LoanProfile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanDisbursements extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
	protected $table = 'lendin_loan_disbursements';

    protected $fillable = [
    	'operation_acti_id',
		'loan_id',
		'economic_code_id',
		'reschedule_no',
		'reset_no',
		'disbursement_account',
		'disbursement_date',
		'disbursement_amount',
		'voucher_number',		
		'currency_code',
		'currency_rate',
		'bdt_amount',
		'usd_amount',
		'fund_source',
		'credit_a',
		'credit_b',
		'created_by',
		'updated_by',		
    ];
}
