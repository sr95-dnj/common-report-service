<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'proc_status';
	protected $fillable = [
	'name',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

}
