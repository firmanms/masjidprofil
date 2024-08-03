<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('homess');
Route::get('page/{slug}', [App\Http\Controllers\FrontendController::class, 'showpage'])->name('showpage');
Route::get('page/statis/blog', [App\Http\Controllers\FrontendController::class, 'showblog'])->name('showblog');
Route::get('page/statis/event', [App\Http\Controllers\FrontendController::class, 'showevent'])->name('showevent');
Route::get('show/detail/{slug}', [App\Http\Controllers\FrontendController::class, 'showdetail'])->name('showdetail');
Route::get('page/statis/galeri', [App\Http\Controllers\FrontendController::class, 'showgaleri'])->name('showgaleri');
Route::get('show/detailgaleri/{slug}', [App\Http\Controllers\FrontendController::class, 'showdetailgaleri'])->name('showdetailgaleri');
Route::get('page/statis/pengurus', [App\Http\Controllers\FrontendController::class, 'showpengurus'])->name('showpengurus');
Route::get('page/statis/kas', [App\Http\Controllers\FrontendController::class, 'showkas'])->name('showkas');
