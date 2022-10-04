<?php

namespace App\Models\Procurement;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
	use SoftDeletes,SecureDelete;
    protected $table = 'proc_contract_type';
	protected $fillable = [
	'name',
	'active',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

	public function contractInPack()
    {
        return $this->hasMany(Packages::class,'contract_type');
	}

}
