<?php

namespace App\Models\Lending\LoanProfile;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;


class LoanProfile extends Model
{
	use SoftDeletes, SecureDelete;
	protected $dates = ['deleted_at'];
	protected $table = 'lending_loan_profiles';

	protected $fillable = [
		'loan_no',
		'operation_id',
		'client_id',
		
		'location_id',
		'sector_id',
		'sub_sector_id',		

		'loan_date',
		're_schedule_no',
		're_schedule_date',
		'reset_no',
		'reset_date',
		'sub_project_id',
		'sub_project_currency',
		'sub_project_location',
		'client_name',
		'agreement_date',
		'pfi_info_id',
		'loan_amount',
		'loan_amount_ida',
		'loan_amount_gob',
		'loan_amount_ida_percent',
		'loan_amount_gob_percent',
		'commitment_charge',
		'repayment_start_date',
		'loan_period_in_month',
		'repayment_period_in_month',
		'installment_type_id',
		'no_of_installment',
		'interest_type',
		'interest_by_month',
		'interest_rate',
		'overdue_interest_rate',
		'grace_period_in_month',
		'sub_grace_period_in_month',

		'interestPay_InGracePeriod',
		'grace_period_interest_rate',
		'sector_name',
		'sub_sector_name',
		'pfi_account_in_bb',
		'transaction_currency',
		'disbursement_account_ida',
		'disbursement_account_gob',
		're_payment_account_no_ida',
		're_payment_account_no_gob',
		'check_number',
		'check_date',
		'remarks',
		'status',
		'old_loan_id',
		'created_by',
		'updated_by',
	];

	/**
	 * Get the Profile Details.
	 */
	public function profile_details()
	{
		return $this->hasMany('App\Models\Lending\LoanProfile\LoanProfileDetail', 'loan_id', 'id');
	}
}
