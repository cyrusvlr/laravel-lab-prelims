<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;

Route::get('/', [BillController::class, 'showForm'])->name('billing.form');
Route::post('/', [BillController::class, 'store'])->name('billing.store');
