<?php

namespace App\Models\Report;

use Illuminate\Database\Eloquent\Model;

class ReportDetails extends Model
{
    //
    protected $fillable = [
        'report_id',
        'parameter_id',
        'serial_num',
        'parameter_title',
        'is_mandatory',
        'is_active',
        'updated_at',
        'updated_at',

    ];


    /**
     * Get report_master
     */
    public function report_master()
    {
        return $this->hasOne('App\Models\Report\ReportMaster', 'id', 'report_id');
    }

    /**
     * Get report_parameter
     */
    public function report_parameter()
    {
        return $this->hasOne('App\Models\Report\ReportParameterMaster', 'id', 'parameter_id');
    }
}
