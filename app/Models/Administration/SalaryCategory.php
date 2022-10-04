<?php

namespace App\Models\Administration;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use App\Models\Administration\OutsourceStaff;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalaryCategory extends Model
{
    use SoftDeletes,SecureDelete;

    protected $table = 'admin_salary_categories';

    public function salaryCategory()
    {
        return $this->hasMany(OutsourceStaff::class,'salary_category');
    }
}
