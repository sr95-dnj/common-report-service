<?php

namespace App\Models\Procurement;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Method extends Model
{
	use SoftDeletes,SecureDelete;
	
	protected $table = 'proc_method';
	
	public function methodInPackage()
    {
        return $this->hasMany(Packages::class,'method_id');
	}
	
	public function methodInSteps()
    {
        return $this->hasMany(MethodSteps::class,'method_id');
    }
}
