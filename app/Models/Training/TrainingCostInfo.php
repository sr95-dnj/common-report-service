<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingCostInfo extends Model
{
    use SoftDeletes;

    protected $table = 'training_cost_infos';
}
