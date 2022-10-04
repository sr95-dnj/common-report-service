<?php

namespace App\Models\Menu;
use App\Models\Menu\MainMenu;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $fillable=[     		
		'menu_id',		
		'submenu_name',
		'sl_no',
		'description',
		'controller_name',
		'css_class',
		'route',
		'url',
		'active',
		'created_by',
        'updated_by'
    ];

    public function categoryChildren(){
    	return $this->hasMany('MainMenu', 'menu_id');
    }
}
