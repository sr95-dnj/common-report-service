<?php

namespace App\Models\Training;

use App\Traits\SecureDelete;
use App\Models\Training\TrainingMaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingCategory extends Model
{
   use SoftDeletes,SecureDelete;
   protected $table = 'training_categories';

    protected $fillable=[     		
		'name',
		'active',
		'created_at',
		'updated_at',
		'deleted_at',
		'created_by',
		'updated_by',
		'deleted_by'
	];
	

	public function trainingCategory()
    {
        return $this->hasMany(TrainingMaster::class,'training_cat_id');
    }
}
