<?php

namespace App\Models\Project_info\OperationActivities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentPartnerChild extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];    
    protected $table = "pro_info_operation_act_development_partners";
    
    protected $fillable = [
        'pro_info_ope_act_development_partners_id',
        'credit_id',
        'credit_amount_usd',
        'credit_amount_tk',
        'created_by',
        'updated_by'
    ];
}