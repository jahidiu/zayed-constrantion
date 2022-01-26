<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientMessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExpertSpotlightController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OurTeamController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });
Route::get('/clear', function () {
    Artisan::call('optimize');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    
    Route::resource('blog', BlogController::class);
    Route::resource('news', NewsController::class);
    Route::resource('project', ProjectController::class);

    Route::resource('team', OurTeamController::class);
    Route::resource('expert', ExpertSpotlightController::class);
    
    Route::resource('category', CategoryController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('client', ClientMessageController::class);


});
