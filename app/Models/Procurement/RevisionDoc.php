<?php

namespace App\Models\Procurement;

use Illuminate\Database\Eloquent\Model;


class RevisionDoc extends Model
{
    protected $table = 'proc_revision_doc';
	protected $fillable = [
	'package_id',
	'name',
	'path',
	'created_by',
	'modified_by',
	'created_at',
	'updated_at'
	];

}
