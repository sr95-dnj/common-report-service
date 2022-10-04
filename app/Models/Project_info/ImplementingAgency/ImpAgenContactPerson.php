<?php

namespace App\Models\Project_info\ImplementingAgency;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImpAgenContactPerson extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_imp_agen_contact_persons';

    protected $fillable = [
        'implementing_agency_id',
        'name',
        'designation',
        'division_ministry',
        'phone',
        'email',
        'status',
        'created_by',
        'updated_by',
    ];
}
