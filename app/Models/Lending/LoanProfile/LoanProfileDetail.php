<?php

namespace App\Models\Lending\LoanProfile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LoanProfileDetail extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_loan_profile_details';

    protected $fillable = [
    	'loan_id',
		'loan_no',
		're_schedule_no',
		're_set_no',
		'installment_no',
		'installment_date',
		'opening_principal',
		'interest',
		'principal',
		'installment_amount',
		'closing_balance',
		'comment',
		'currency',
		'status',
		'receipt_date',
		'receipt_amount',
		'is_late_payment',
		'penalty_amount',
		'penalty_date',
		'is_complete',
		'is_active',
		'charge_type_id',
		're_payment_id',
		'pre_payment',
		'penalty_charge',
		'cheque_no',
		'cheque_date',
		'cheque_clear_date',
		'receive_voucher_id',
		'receive_currency_rate',
		'created_by',
		'updated_by',		
    ];
}
