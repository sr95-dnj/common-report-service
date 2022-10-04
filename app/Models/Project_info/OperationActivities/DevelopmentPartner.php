<?php

namespace App\Models\Project_info\OperationActivities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentPartner extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];    
    protected $table = "pro_info_ope_act_dev_partners";
    
    protected $fillable = [
        'ope_act_id',
        'devMt_partner_id',
        'credit_id',
        'credit_amount_usd',
        'credit_amount_tk',
        'revision',
        'created_by',
        'updated_by'
    ];
}