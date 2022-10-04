<?php

namespace App\Models\Lending\PFI;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PfiContactPerson extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
	protected $table = 'lending_pfi_contact_persons';

    protected $fillable = [
    	'pfi_info_id',
		'name',
		'mobile',
		'designation',
		'email',
		'created_by',
		'updated_by',		
    ];
}
