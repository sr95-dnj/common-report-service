<?php

namespace App\Models\Report;

use Illuminate\Database\Eloquent\Model;

class ReportParameterMaster extends Model
{
    //
    protected $fillable = [
        'parameter_name',
        'parameter_title',
        'parameter_type',
        'parameter_type',
        'table_name',
        'column_ref_1',
        'column_ref_2',
        'raw_sql_query',
        'is_active',
        'updated_at',
        'updated_at',

    ];
}
