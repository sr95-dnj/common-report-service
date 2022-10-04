<?php

namespace App\Models\Procurement;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MethodSteps extends Model
{
	use SoftDeletes, SecureDelete;
	protected $table = 'proc_method_steps';

	protected $fillable = [
		'method_id',
		'method_name',
		'short_name',
		'step_serial',
		'is_supplier',
		'active',
		'created_at',
		'created_by',
		'updated_at',
		'modified_by'
	];
	// 

	public function methodInPackageExec()
	{
		return $this->hasMany(Execution::class, 'method_step_id');
	}
}
