<?php

use App\Http\Controllers\Admin\OrmasController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\PengajuanController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'as' => 'site.',
        'controller' => IndexController::class,
    ],
    function () {
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
        Route::group([
            'prefix' => 'list',
            'as' => 'list.',
            'controller' => OrmasController::class,
        ], function () {
            Route::get('/', 'viewListOrmas')->name('index');
        });
    }
);

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
