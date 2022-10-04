<?php

namespace App\Models\Procurement;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Types extends Model
{
	use SoftDeletes,SecureDelete;
    protected $table = 'proc_types';
	protected $fillable = [
	'name',
	'active',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

	public function typesEco()
    {
        return $this->hasMany(TypesEco::class,'type_id');
	}

}
