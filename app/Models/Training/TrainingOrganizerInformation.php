<?php

namespace App\Models\Training;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingOrganizerInformation extends Model
{
    use SoftDeletes,SecureDelete;

    protected $table = 'training_organizer_informations';

    public function organizer()
    {
        return $this->hasMany(TrainingMaster::class,'organizer_id');
    }
}
