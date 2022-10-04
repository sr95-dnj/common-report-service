<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;

class PackageVersion extends Model 
{
    protected $table = 'proc_package_versions';    

    protected $fillable = [
        'operation_act_id', 
        'version_no',
        'versioning_date',
        'document_name',        
        'is_active',
        'created_by',
        'updated_by',
    ];
}
