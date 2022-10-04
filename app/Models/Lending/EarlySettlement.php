<?php

namespace App\Models\Lending;

use Illuminate\Database\Eloquent\Model;

class EarlySettlement extends Model
{

    protected $fillable = [
        'operation_id',
        'loan_id',
        'voucher_id',
        'voucher_no',
        'reset_no',
        'reschedule_no',
        'settlement_date',
        'principal',
        'interest',
        'outstanding',
        'others_charge',
        'commitment_charge',
        'receivable',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
