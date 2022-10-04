<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class CreditMaster extends Model
{
	use SoftDeletes, SecureDelete;
	protected $dates = ['deleted_at'];
	protected $table = 'pro_info_credit_masters';

	protected $fillable = [
		'credit_code',
		'credit_name',
		'remarks',
		'is_active',
		'created_by',
		'updated_by',
	];

	// public function economic_info()
	// {
	// 	return $this->hasOne('App\Models\Project_info\EconomyCodeInfo', 'id', 'economic_id');
	// }
}
