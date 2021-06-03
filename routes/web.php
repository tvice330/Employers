<?php

use App\Http\Controllers\Employes\EmployesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Employes',
], function () {
    Route::get('/employes', [EmployesController::class, 'index']);
    Route::get('/employes/{department}', [EmployesController::class, 'show']);
    Route::get('/404', [EmployesController::class, 'notFound']);
    Route::get('/import', [EmployesController::class, 'importEmployes']);
});


