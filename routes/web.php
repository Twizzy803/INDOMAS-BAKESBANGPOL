<?php

use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\PengajuanController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'site.',
    'controller' => IndexController::class,
], function () {
    Route::get('/', 'index')->name('index');
    Route::post('/story/{login_id}', 'createStory')->name('createStory');
    Route::group([
        'prefix' => 'pengajuan',
        'as' => 'pengajuan.',
        'controller' => PengajuanController::class,
    ], function () {
        Route::get('/', 'request')->name('request');
        Route::post('/', 'simpan')->name('simpan');
    });
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
