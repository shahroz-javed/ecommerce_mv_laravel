<?php

use App\Models\Tenant;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        Route::get('/', function () {
            // dd(request()->getHost());
            // $t = Tenant::create();
            // $t->domains()->create(['domain' => 'tenant112.localhost']);
            // return $t;
            return view('welcome');

        });
    });
}

// require __DIR__ . '/tenant.php';
