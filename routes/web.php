<?php

use App\Http\Controllers\ProductController;
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
    return view('index');
});
Route::get('/images/{name}', 'FileController@show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix("blog")->name("blogs.")->controller(ProductController::class)->group(function(){
    Route::get("/list", "index")->name("list");
    Route::get("/detail/{id}", "detail")->name("detail");
    Route::get("/store", "store")->name("store");
    Route::get('/image-upload', 'upview')->name('image.form');
    Route::any('/upload', 'upload')->name(name:"upload");
    Route::post("/create", "create")->name("create");
    Route::post('/upload-image', 'storeImage')->name('image.store');
    Route::put("/update/{id}", "update")->name("update");
    Route::get("/destroy/{id}", "destroy")->name("destroy");
});

Route::prefix("brand")->name("products.")->controller(ProductController::class)->group(function(){
    Route::get("/list", "index")->name("list");
    Route::get("/detail/{id}", "detail")->name("detail");
    Route::get("/store", "store")->name("store");
    Route::get('/image-upload', 'upview')->name('image.form');
    Route::any('/upload', 'upload')->name(name:"upload");
    Route::post("/create", "create")->name("create");
    Route::post('/upload-image', 'storeImage')->name('image.store');
    Route::put("/update/{id}", "update")->name("update");
    Route::get("/destroy/{id}", "destroy")->name("destroy");
});

require __DIR__.'/auth.php';
