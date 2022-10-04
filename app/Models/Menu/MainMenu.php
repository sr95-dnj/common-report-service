<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    protected $fillable=[     		
		'menu_name',
		'sl_no',
		'css_class',
		'route',
		'menu_url',
        'dashboard',
		'active',
		'created_by',
        'updated_by'
    ];

    // public function categoryChildren(){
    // 	return $this->hasMany('MainMenu', 'menu_id');
    // }

   	public function childs() {
        return $this->hasMany('App\Models\Menu\SubMenu','menu_id','id');
    }

}
