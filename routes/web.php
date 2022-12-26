<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Cotegory;
use App\Http\Controllers\ComapnyController;
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

Route::get('/', function () {
    return view('welcome');

    
    //redis routes
    // Route::get('showProfile', function () {
    //     // Route logic...
     
    //     Redis::showProfile('test-channel', json_encode(['foo' => 'bar']));
    // });
});

Route::get('/layout', function () {
    return view('layout');

});

Route::get('/blog', function () {
    return view('blog');

});
Route::get('/contact', function () {
    return view('contact');

});
Route::get('/services', function () {
    return view('services');

});
Route::get('/about', function () {
    return view('about');

});

Route::get('/list',[CategoryController::class,'index']); 
    
//login Routes
Route::get('/login', function () {
    return view('login');

});

Route::get('/register', function () {
    return view('register');
});



Route::get('/subscribe','\App\Http\Controllers\Controller@subscribe');


//company routes

Route::resource('companies', ComapnyController::class);