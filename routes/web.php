<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\AdminCategories;
use App\Http\Controllers\AdminTags;
use App\Http\Controllers\UserPanel;

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

Route::get('/', [UserPanel::class, 'index'])->name('userPanel');

Route::get('/category/{category:category_slug}', [UserPanel::class, 'showCategory'])->name('category');

Route::prefix('admin/')->group(function () {
    Route::get('/', [AdminPanel::class, 'mainPanel'])->name('adminPanel')->middleware('access.to.admin');

    Route::get('article-autocomplete', [AdminPanel::class, 'autocomplete'])->name('articleAutocomplete');

    Route::get('tag-autocomplete', [AdminTags::class, 'autocomplete'])->name('tagAutocomplete');

    Route::resource('articles', AdminPanel::class);

    Route::resource('categories', AdminCategories::class);

    Route::resource('tags', AdminTags::class);
});


