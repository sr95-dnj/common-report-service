<?php

namespace App\Models\Financial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class BipReportMaster extends Model
{
    protected $table = 'bip_report_masters';
    use SoftDeletes, SecureDelete;    
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'operation_id',    	
    	'start_date',
    	'end_date',    	
		'is_active',
		'deleted_by',
		'created_by',
		'updated_by',		
    ];
}
