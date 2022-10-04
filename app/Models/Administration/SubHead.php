<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubHead extends Model
{
    use SoftDeletes;
    
    protected $table = 'admin_sub_heads';
}
