<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingMaster extends Model
{
    use SoftDeletes;

    protected $table = 'training_master';
}
