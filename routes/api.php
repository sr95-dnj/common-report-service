<?php

use Illuminate\Http\Request;
use App\Traits\AuthUser;

/*
  |------------------------

use Illuminate\Http\Request;
use App\Traits\AuthUser;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
}); */

/*----------------Post Request--------------*/
Route::post('pdf-generate-post', 'Report\ReportController@pdfGenerator');

/*----------------HTTP Request--------------*/
Route::get('pdf-generate-api/{lng}/{file_name}', 'Report\PdfController@pdfGeneratorApi');

Route::get('test', 'Report\PdfController@test');
Route::get('htmlView/{UrlPath1}/{UrlPath2}/{templateName}/{view?}', 'Report\PdfController@htmlView');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});                                                                                                                                                                                                            