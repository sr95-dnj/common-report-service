<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Lending\LoanProfile\LoanDisbursements;

use App\Models\Lending\LoanProfile\LoanProfile;

use App\Models\Financial\BipReport;
use App\Models\Asset\AssetCategory;
use App\Models\Procurement\PackageEco;

use App\Traits\SecureDelete;

class EconomyCodeInfo extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_economy_code_infoes';

    protected $fillable = [
        'operation_act_id',
        'root_name',
        'head_type',
        'eco_account_code',
        'eco_account_name',
        'operating_currency',
        'account_type',
        'remarks',
        'project_component',
        'category',
        'address',
        'service_type',
        'unit',
        'is_active',
        'account_with',
        'created_by',
        'updated_by',
    ];

    public function CheckLoanDisburseM()
    {
        return $this->hasMany(LoanDisbursements::class,'economic_code_id');
    }

    public function CheckLoanProfile1()
    {
        return $this->hasMany(LoanProfile::class,'disbursement_account_ida');
    }
    public function CheckLoanProfile2()
    {
        return $this->hasMany(LoanProfile::class,'disbursement_account_gob');
    }
    public function CheckLoanProfile3()
    {
        return $this->hasMany(LoanProfile::class,'re_payment_account_no_ida');
    }
    public function CheckLoanProfile4()
    {
        return $this->hasMany(LoanProfile::class,'re_payment_account_no_gob');
    }

    public function CheckBipReport()
    {
        return $this->hasMany(BipReport::class,'eco_code_id');
    }

    public function CheckAssetCategory()
    {
        return $this->hasMany(AssetCategory::class,'economic_id');
    }

    public function CheckPackageEco()
    {
        return $this->hasMany(PackageEco::class,'eco_head_id');
    }    
}
