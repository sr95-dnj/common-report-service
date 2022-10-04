<?php

namespace App\Models\Lending;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;
use App\Models\Lending\LoanProfile\LoanProfile;
class InstallmentType extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_installment_types';

    protected $fillable = [
    	'installment_type',
		'yearly_installment',
		'year_divided',
		'is_active',
		'created_by',
		'updated_by',		
    ];

    public function CheckInstType()
    {
        return $this->hasMany(LoanProfile::class, 'installment_type_id');
    }
}
