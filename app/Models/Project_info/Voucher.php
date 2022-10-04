<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
	protected $table = 'pro_info_vouchers';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'log_in_project_id',
        'voucher_id',
        'voucher_type',
        'voucher_date',
        'currency_code',
        'currency_rate',
        'narration',
        'eco_code',
        'eco_code_name',
        'tr_debit',
        'tr_credit',
        'currency',
        'bdt_debit',
        'bdt_credit',
        'source_of_fund',
        'status',
        'created_by',
        'updated_by',
    ];
}
