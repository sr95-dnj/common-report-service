<?php

namespace App\Models\Project_info\Development_partner;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactPerson extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'pro_info_contact_persons';

    protected $fillable = [
        'dev_partner_id',
        'name',
        'phone',
        //'designation_id', // It has been changed from designation_id to designation_name
        'designation_name',
        'email',
        'division',
        'is_active',
        'created_by',
        'updated_by',
    ];
}
