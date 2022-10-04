<?php

namespace App\Models\Project_info\ImplementingAgency;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImplementingAgency extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_implementing_agencies';

    protected $fillable = [
        'agency_name',
        'agency_type',
        'office_email',
        'office_address',
        'office_phone',
        'office_fax',
        'status',
        'created_by',
        'updated_by',
    ];
}
