<?php

use App\Http\Controllers\BarberController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbershopController;
use App\Http\Controllers\ServiceController;
use App\Models\Barbershop;

Route::get('/', [PublicController::class, 'index'])->name('public.index');




// Barbershop routes
Route::resource('barberias', BarbershopController::class)
    ->parameters(['barberias' => 'barbershop']);
Route::get('barberias_list/{lat?}/{lng?}', [BarbershopController::class, 'list'])->name('barbershops.list');


// Barber routes
Route::resource('barberias.barberos', BarberController::class)
    ->parameters(['barberias' => 'barbershop', 'barberos' => 'barber']);

// Service routes
Route::resource('barberias.servicios', ServiceController::class)
    ->parameters(['barberias' => 'barbershop', 'servicios' => 'service']);
