<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AkunController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\OrmasController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'controller' => AdminController::class,
    'middleware' => ['auth', 'role:admin']
], function(){
    Route::get('/', 'dashboard')->name('dashboard');
    Route::group([
        'prefix' => 'akun',
        'as' => 'akun.',
        'controller' => AkunController::class
    ], function(){
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'tambah')->name('tambah');
        Route::post('/tambah', 'simpan')->name('simpan');
        Route::get('/{id}', 'detail')->name('detail');
        Route::get('/{id}/update', 'ubah')->name('ubah');
        Route::patch('/{id}/update', 'update')->name('update');
        Route::delete('/{id}', 'delete')->name('delete');
    });
    Route::group([
        'prefix' => 'kategori',
        'as' => 'kategori.',
        'controller' => KategoriController::class,
    ], function(){
        Route::get('/', 'index')->name('index');
        Route::get('/tambah', 'tambah')->name('tambah');
        Route::post('/tambah', 'simpan')->name('simpan');
        Route::get('/{id}', 'detail')->name('detail');
        Route::get('/{id}/update', 'ubah')->name('ubah');
        Route::patch('/{id}/update', 'update')->name('update');
        Route::delete('/{id}', 'delete')->name('delete');
    });
    Route::group([
        'prefix' => 'ormas',
        'as' => 'ormas.',
        'controller' => OrmasController::class,
    ], function(){
        Route::get('/', 'index')->name('index');
        Route::get('/{id}', 'detail')->name('detail');
        Route::post('/{id}/setuju', 'setuju')->name('setuju');
        Route::post('/{id}/tolak', 'tolak')->name('tolak');
        Route::post('/{id}/hapusAkses', 'hapusAkses')->name('hapusAkses');
    });
});