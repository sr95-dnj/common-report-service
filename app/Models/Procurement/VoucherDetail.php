<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;

class VoucherDetail extends Model
{
    protected $table = 'proc_voucher_detail';
	protected $fillable = [
	'voucher_id',
	'eco_head_id',
	'eco_code',
	'currency_code',
	'currency_rate',
	'voucher_date',
	'reference',
	'transaction_debit',
	'transaction_credit',
	'base_debit',
	'base_credit',
	'fund_source',
	'package_id',
	'client_id',
	'loan_id',
	're_schedule_no',
	're_set_no',
	'loan_details_id',
	'installment_no',
	'asset_id',
	'asset_code',
	'training_id',
	'participant_id',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

}
