<?php

namespace App\Models\Project_info\Voucher;

use Illuminate\Database\Eloquent\Model;

class VoucherMaster extends Model
{
    protected $table = 'voucher_master';

    protected $fillable = [
        'voucher_number',
        'operation_id',
        'voucher_type',
        'referance_type',
        'currency_code',
        'usd_rate',
        'voucher_date',
        'ref_go_number',
        'reference_date',
        'narration',
        'is_post',
        'created_by',
        'updated_by',
    ];

    /**
     * Get the Profile Details.
     */
    public function details()
    {
        return $this->hasMany('App\Models\Project_info\Voucher\VoucherDetails', 'voucher_id', 'id');
    }
}
