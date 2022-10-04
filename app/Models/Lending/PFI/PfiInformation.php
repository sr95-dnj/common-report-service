<?php

namespace App\Models\Lending\PFI;

use App\Models\Lending\PFI\PfiContactPerson;
use App\Models\Lending\LoanProfile\LoanProfile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class PfiInformation extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_pfi_informations';

    protected $fillable = [
    	'pfi_name',
		'short_name',
		'pfi_type',
		'ppfi_address',
		'pfi_phone',
		'pfi_fax',
		'pfi_email',
		'maf_sign_date',
		'is_active',
		'created_by',
		'updated_by',		
    ];

    public function DelPfiContPerson()
    {
        return $this->hasMany(PfiContactPerson::class, 'pfi_info_id');
    }

    public function DelLoanProfile()
    {
        return $this->hasMany(LoanProfile::class, 'pfi_info_id');
    }
}
