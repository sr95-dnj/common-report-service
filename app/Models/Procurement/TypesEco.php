<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypesEco extends Model
{
	use SoftDeletes;
    protected $table = 'proc_ecocode';
	protected $fillable = [
	'type_id',
	'eco_head_id',
	'active',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

}
