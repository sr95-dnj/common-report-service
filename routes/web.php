<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('report_generated_file', 'Report\ReportGeneratorController@report_generated_file');
Auth::routes();

Route::get('testPdf', 'Report\PdfController@testPdf');
Route::get('pageView', 'Report\PdfController@pageView');

Route::get('pdf', 'Report\PdfController@index');
Route::get('archive-pdf', 'Report\PdfController@archiveDetailPdf');
Route::get('details-pdf', 'Report\PdfController@packageDetailPdf');
Route::get('training-details-pdf', 'Report\PdfController@trainingDetailPdf');
Route::get('execution-details-pdf', 'Report\PdfController@executionDetailPdf');
Route::get('dev-partner-pdf', 'Report\PdfController@devPartnerPdf');
Route::get('imp-agency-pdf', 'Report\PdfController@impAgencyPdf');
Route::get('asset-movement-details-pdf', 'Report\AssetReportController@assetMovementDetailsPdf');
Route::get('details-ope-activities/{opeActivitiesId}', 'Project_info\OperationActivities\ViewDetailsController@getAllData');

Route::get('project-budget-details/{id}', 'Project_info\ProjectBudget\ArchiveController@details');

Route::get('budget-wise-details/{id}', 'Project_info\ProjectBudget\ArchiveController@budgetWiseDetails');
/*---------project-budget-archive---------*/
Route::get('project-budget-archive/{id}', 'Project_info\ProjectBudget\ArchiveController@archiveDetails');
//previous function
//Route::get('project-budget-archive/{id}', 'Project_info\ProjectBudget\ArchiveController@view');
/*---------/project-budget-archive---------*/

Route::get('mid-term-pro-bud-details', 'Project_info\MidTermBudgetFramework\MidTermBudgetViewDetailController@details');


Route::get('yearly-pro-budget-details/{id}', 'Project_info\YearlyProjectBudget\YearlyProBudArchiveController@details');

Route::get('yearly-pro-budget-archive/{id}', 'Project_info\YearlyProjectBudget\YearlyProBudArchiveController@archiveDetails');
//Route::get('yearly-pro-budget-archive/{id}', 'Project_info\YearlyProjectBudget\YearlyProBudArchiveController@view');

Route::get('org_details', 'Report\PdfController@org_details');


/*Route::get('user/{id}', function($id)
{
return 'User '.$id;
});*/

//Route::get('operation-activities-list/{id}', 'Project_info\OperationActivities\OperationActivitiesController@getData');


Route::get('rms-report/{lng}', 'Report\PdfController@testPdf2');