<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\singup_singin;
use App\Http\Controllers\rider;
use App\Http\Controllers\admin;

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
Route::view("userlogin","userlogin");
Route::post('usersingup', [singup_singin::class, 'usersingup']);
Route::post('usersingin', [singup_singin::class, 'usersingin']);

Route::get('userhome', [singup_singin::class, 'userhome']);

Route::view("adminhome","adminhome");
Route::view("riderapplyfrom","riderapplyfrom");
Route::post('riderapplyfrom', [rider::class, 'riderapplyfrom']);
Route::view("adminlogin","adminlogin");
Route::post('adminlogin', [admin::class, 'adminlogin']);

Route::get('adminevent', [admin::class, 'adminevent']);
Route::post('adminevent', [admin::class, 'admineventadd']);

Route::get('removeevent/{id}', [admin::class, 'removeevent']);
Route::view("userprofile","userprofile");
Route::view("riderlogin","riderlogin");


Route::post('riderlogin', [rider::class, 'riderlogin']);

Route::post('riderapplyfrom', [rider::class, 'riderapplyfrom']);

Route::get('adminriderasp', [admin::class, 'adminriderasp']);

Route::get('adminreqasp/{id}/{email}/{name}', [admin::class, 'adminreqasp']);

Route::get('userprofile', [singup_singin::class, 'userprofile']);

Route::post('userprofileimage', [singup_singin::class, 'userprofileimage']);


Route::get('userdonatelist', [singup_singin::class, 'userdonatelist']);
Route::get('userdonateapply', [singup_singin::class, 'userdonateapply']);
Route::post('userdonateapply', [singup_singin::class, 'userdonateapplyfrom']);
Route::get('riderhome', [rider::class, 'riderhome']);

Route::get('riderprofile', [rider::class, 'riderprofile']);

Route::get('admindonateinfo', [admin::class, 'admindonateinfo']);
Route::post('admindonateinfoapply', [admin::class, 'admindonateinfoapply']);

Route::view("volunteerapply","volunteerapply");
Route::post('volunteerapply', [admin::class, 'volunteerapply']);

Route::get('adminvolunteerasp', [admin::class, 'adminvolunteerasp']);

Route::get('adminvreqasp/{id}/{email}/{name}', [admin::class, 'adminvreqasp']);

Route::get('riderpick', [rider::class, 'riderpick']);

Route::get('myride', [rider::class, 'myride']);

Route::get('showmap/{id}', [rider::class, 'showmap']);