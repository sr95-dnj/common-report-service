<?php

namespace App\Models\Procurement;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Units extends Model
{
	use SoftDeletes,SecureDelete;

    protected $table = 'proc_units';
	protected $fillable = [
	'name',
	'active',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

	public function UnitInPack()
    {
        return $this->hasMany(Packages::class,'unit_id');
	}

}
