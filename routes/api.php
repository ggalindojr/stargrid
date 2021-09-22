<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('reports', 'Api\\ReportController@index');
Route::get('reports/{id}', 'Api\\ReportController@show');