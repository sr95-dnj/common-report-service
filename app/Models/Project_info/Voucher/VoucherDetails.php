<?php

namespace App\Models\Project_info\Voucher;

use Illuminate\Database\Eloquent\Model;

class VoucherDetails extends Model
{
    protected $table = 'voucher_details';
    protected $fillable = [
        'voucher_id',
        'eco_head_id',
        'eco_code',
        'currency_code',
        'usd_rate',
        'voucher_date',
        'reference',
        'transaction_debit',
        'transaction_credit',
        'bdt_debit',
        'bdt_credit',
        'usd_debit',
        'usd_credit',
        'fund_source',
        'package_id',
        'client_id',
        'category_name',
        'loan_id',
        're_schedule_no',
        're_set_no',
        'loan_details_id',
        'installment_no',
        'asset_id',
        'asset_code',
        'training_id',
        'participant_id',
        'amount_type',
    ];
}
