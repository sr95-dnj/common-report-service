<?php

namespace App\Models\Project_info;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerDetails extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_partner_details';
    
    protected $fillable = [
    	'project_id',
    	'dev_partner_id',
    	'credit_id',
    	'amount_usd',
    	'amount_taka',
    	'status',
    	'created_by',
    	'updated_by',
    ];
}
