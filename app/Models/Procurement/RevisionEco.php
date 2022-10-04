<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;

class RevisionEco extends Model
{
    protected $table = 'proc_revision_eco';
	protected $fillable = [
	'package_id',
	'eco_head_id',
	'eco_code',
	'amount',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

}
