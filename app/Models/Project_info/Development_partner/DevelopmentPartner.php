<?php

namespace App\Models\Project_info\Development_partner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DevelopmentPartner extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_development_partners';

    protected $fillable = [
        'dev_partner_name',
        'office_phone_no',
        'dev_partner_type',
        'office_email',
        'in_short',
        'address',
        'office_fax',
        'keyword',
        'is_active',
        'created_by',
        'updated_by',
    ];
}
