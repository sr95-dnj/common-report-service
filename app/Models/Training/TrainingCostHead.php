<?php

namespace App\Models\Training;

use App\Traits\SecureDelete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingCostHead extends Model
{
    use SoftDeletes,SecureDelete;
    protected $table = 'training_cost_heads';

    public function costhead()
    {
        return $this->hasMany(TrainingCostInfo::class,'training_cost_head_id');
    }
}
