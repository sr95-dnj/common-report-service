<?php

namespace App\Models\Report;

use Illuminate\Database\Eloquent\Model;

class ReportMaster extends Model
{
    //
    protected $fillable = [
        'file_name',
        'con_short_name',
        'report_title',
        'menu_id',
        'serial_num',
        'user_role',
        'is_active',
        'updated_at',
        'updated_at',

    ];

    /**
     * Get the phone record associated with the user.
     */
    public function main_menu()
    {
        return $this->hasOne('App\Models\Menu\MainMenu', 'id', 'menu_id');
    }
}
