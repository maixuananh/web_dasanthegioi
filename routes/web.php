<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PageController;
use App\http\Controllers\ProductsController;
use App\http\Controllers\PostsController;
use App\http\Controllers\FoodsController;

Route::get('/',[PageController::class,'index']);
Route::get('/about',[PageController::class,'about']);
Route::get('/posts',[PostsController::class,'index']);
Route::resource('/foods',FoodsController::class);

// Route::get('/', function () {
//     return view('home');

// });

// Route::get('/user', function () {
//     return "This is you user page";
// });

// //api rou

// Route::get('/admin', function () {
//     return ['admin','tai xe' , 'admin'];
// });
// //lay dc id
//  Route::get('/admin/{id}', function ($id) {
//     return "This is you admin page with id: ".$id;
// });

// ///nhay qua trang admin
// Route::get('/something',function () {
//    return redirect('/admin');
// });
