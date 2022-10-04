<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'proc_voucher';
	protected $fillable = [
	'voucher_number',
	'operation_id',
	'voucher_type_id',
	'currency_code',
	'currency_rate',
	'voucher_date',
	'narration',
	'is_post',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

}
