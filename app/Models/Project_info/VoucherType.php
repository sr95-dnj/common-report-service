<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VoucherType extends Model
{
	protected $table = 'pro_info_voucher_types';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'type_name',
        'short_name',
        'is_active',
        'created_by',
        'updated_by',
    ];
}
