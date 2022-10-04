<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingParticipantInfo extends Model
{
    use SoftDeletes;

    protected $table = 'training_participants_info';
}
