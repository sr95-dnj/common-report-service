<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MainManu extends Model
{
    protected $table = ['sys_menu'];
    protected $primaryKey = 'menu_id';
    public $incrementing = false;
    
    protected $fillable=[     		
		'menu_name',
		'sl_no',
		'css_class',
		'route',
		'menu_url',
		'active',
    ];
}
