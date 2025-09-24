<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbershopController;
use App\Models\Barbershop;

Route::get('/', [PublicController::class, 'index'])->name('public.index');


// Barbershop routes
Route::resource('barberias', BarbershopController::class)
->parameters(['barberias' => 'barbershop']);
Route::get('barberias_list/{lat?}/{lng?}', [BarbershopController::class, 'list'])->name('barbershops.list');




