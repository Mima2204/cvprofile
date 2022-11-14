

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\listController;

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

// Route::get('/', function () {
//     return view('home.index');
// });

route::get('/',[HomeController::class,'index']);

Route::post('/uploadpost',[HomeController::class,'upload']);

Route::post('/uploadpo',[HomeController::class,'load']);

Route::post('/Pastload',[HomeController::class,'Pastl']);

Route::post('/upload',[HomeController::class,'loadt']);

Route::post('/postload',[HomeController::class,'tload']);

Route::post('/uploa',[HomeController::class,'tupload']);

Route::post('/uploa',[HomeController::class,'tupload']);

Route::post('/saveload',[HomeController::class,'savel']);

Route::get('/view_personne',[HomeController::class,'view_personne']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
