<?php

namespace App\Models\Project_info\ProjectForcustReport;

use Illuminate\Database\Eloquent\Model;

class ProjectForcustReportDetail extends Model
{
	protected $table = 'project_forcust_report_details';
	public $timestamps = false;

	protected $fillable = [
		'forcust_id',
		'category',
		'q1_creditA',
		'q1_creditB',
		'q2_creditA',
		'q2_creditB',
		'q3_creditA',
		'q3_creditB',
		'q4_creditA',
		'q4_creditB',
	];
}
