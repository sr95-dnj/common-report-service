<?php

namespace App\Models\Financial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\SecureDelete;

class BipReport extends Model
{
    protected $table = 'bip_reports';
    use SoftDeletes, SecureDelete;    
    protected $dates = ['deleted_at'];

    protected $fillable = [
    	'operation_id',  
        'bipReport_master_id',  	
    	/*'start_date',
    	'end_date',*/
    	'eco_code_id',
    	'q1_total',
    	'q1_taka',
    	'q1_gpa',
    	'q1_rpa',
    	'q1_others',
    	'q2_total',
    	'q2_taka',
    	'q2_gpa',
    	'q2_rpa',
    	'q2_others',
    	'q3_total',
    	'q3_taka',
    	'q3_gpa',
    	'q3_rpa',
    	'q3_others',
    	'q4_total',
    	'q4_taka',
    	'q4_gpa',
    	'q4_rpa',
    	'q4_others',
		'is_active',
		'deleted_by',
		'created_by',
		'updated_by',		
    ];
}
