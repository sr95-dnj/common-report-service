<?php

namespace App\Models\DocumentManagement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocManagement extends Model
{
    use SoftDeletes;

    protected $table = 'pro_info_project_documents';
}
