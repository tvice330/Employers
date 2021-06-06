<?php

use App\Http\Controllers\Department\DepartmentController;
use App\Http\Controllers\Employes\EmployesController;
use Illuminate\Support\Facades\Route;

Route::group([
    'namespace' => 'Employes',
], function () {
    Route::get('/employes', [EmployesController::class, 'index'])->name('employers');
    Route::get('/404', [EmployesController::class, 'notFound']);
    Route::get('/import', [EmployesController::class, 'importEmployes']);

});

Route::get('/department/{id}', [DepartmentController::class, 'show'])->name('department');
