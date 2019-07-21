<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public function map()
    {
        Route::middleware('web')->group(base_path('routes/web-routes.php'));

        if (app()->environment('local')) {
            Route::middleware('api')->prefix('api/v1')->group(base_path('routes/test-api-routes.php'));
        }
    }
}
