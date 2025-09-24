<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use App\Models\Barbershop;

class RouteServiceProvider extends ServiceProvider
{
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        parent::boot();

        // Binding personalizado
        Route::bind('barbershop', function ($value) {
            $barbershop = Barbershop::where('slug', $value)->first();
            if (!$barbershop && is_numeric($value)) {
                $barbershop = Barbershop::find($value);
            }
            if (!$barbershop) {
                abort(404);
            }
            return $barbershop;
        });
    }
    
}
