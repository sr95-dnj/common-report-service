<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

class SysSubmenu extends Model
{
    protected $table = ['sys_submenu'];
    
    protected $fillable=[     
    "submenu_id",
    "menu_id",
    "submenu_name",
    "sl_no",
    "description",
    "css_class",
    "route",
    "url",
    "activ"
    ];
}
