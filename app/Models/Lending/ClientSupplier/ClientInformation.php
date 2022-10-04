<?php

namespace App\Models\Lending\ClientSupplier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lending\LoanProfile\LoanProfile;
use App\Models\Lending\SubProjectInfo;
use App\Traits\SecureDelete;

class ClientInformation extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_client_informations';

    protected $fillable = [
    	'client_name',
		'phone',
		'office_address',
		'fax',
		'email',
		'contact_person',
		'contact_person_phone',
		'sector_id',
		'sub_sector_id',
		'remarks',
		'type',
		'is_active',
		'created_by',
		'updated_by',		
    ];

    public function CheckLoanProfile()
    {
        return $this->hasMany(LoanProfile::class, 'client_id');
    }

    public function CheckSubProjectInfo()
    {
        return $this->hasMany(SubProjectInfo::class, 'client_id');
    }
}
