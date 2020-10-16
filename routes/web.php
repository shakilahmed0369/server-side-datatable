<?php

use App\Models\DataTable;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Yajra\Datatables\Datatables;

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

Route::get('/server', function(){
	$datatable = DataTable::select('name', 'email', 'country');
    return Datatables::of($datatable)->make('true');
})->name('server.fetch');