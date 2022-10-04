<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcDocument extends Model
{
    use SoftDeletes;

    protected $table = 'proc_documents';
}
