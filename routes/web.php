<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\FontsController;

use Illuminate\Support\Facades\Route;

//BREEZEをつけるようにする。
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });



//ユーザー表示用

Route::get('/', [ArtistsController::class, 'index'])->name('index');

Route::get('/user_detail/{profile_id}', [ArtistsController::class, 'show']);


Route::get('/free-font-download', [FontsController::class, 'downloadpage'])->name('download');

/*
Route::get('/free-font-download', function () {
    return view('download');
});
*/

//AUTH系（BREEZE）
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

///////////////
//管理ページ系//
///////////////

///////////////
//Artistコントローラー系//
///////////////

//Route::get('/edit-index', [ArtistsController::class, 'editindex'])->name('editindex');

//管理トップページ
Route::get('/edit-index', [ArtistsController::class, 'editindex'])
    ->middleware('auth')
    ->name('edit-index');

//新規追加ページ
Route::get('/edit-index/addpage', [ArtistsController::class, 'addpage'])
    ->middleware('auth')
    ->name('addpage');

//新規追加ページ内の投稿用
Route::post('/artist_add',[ArtistsController::class, 'artist_add']);

//編集ページ用
Route::get('/edit-index/detailedit/{profile_id}', [ArtistsController::class, 'detailedit'])
    ->middleware('auth')
    ->name('addpage');


//ページ更新
Route::put('/artist_edit', [ArtistsController::class, 'update']);

//ページ削除
Route::delete('/artistdelete', [ArtistsController::class, 'delete']);


///////////////
//Fontコントローラー系//
///////////////
//新規追加ページ
Route::get('/edit-index/addpage/fontadd/{profile_id}', [FontsController::class, 'addpage'])
    ->middleware('auth')
    ->name('addpage');

//新規追加ページ内の投稿用
Route::post('/font_add',[FontsController::class, 'font_add']);


require __DIR__.'/auth.php';
