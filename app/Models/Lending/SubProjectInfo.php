<?php

namespace App\Models\Lending;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;
use App\Models\Lending\LoanProfile\LoanProfile; 
class SubProjectInfo extends Model
{
    use SoftDeletes, SecureDelete;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_sub_project_infos';

    protected $fillable = [
		'sub_project_name',
		'sector_id',
		'operation_id',
		'location_id',
		'sub_sector_id',
		'project_start_date',
		'project_end_date',
		'client_id',
		'agreement_date',
		'moratorium_period',
		'comments',
		'gob_usd',
		'ida_usd',
		'usd_total',
		'gob_bdt',
		'ida_bdt',
		'bdt_total',
		'created_by',
		'updated_by',		
    ];

    public function CheckSubProId()
    {
        return $this->hasMany(LoanProfile::class, 'sub_project_id');
    }
}
