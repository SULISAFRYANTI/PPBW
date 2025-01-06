<?php

namespace App\Providers;

use Eloquent;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Store;
use App\Policies\StorePolicy;
use App\Models\User;
use Illuminate\Container\Attributes\Database;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Store::class, StorePolicy::class);
        Gate::define('isPartner', fn (User $user) =>  $user->isAdmin() || $user->isPartner());
        
        \Illuminate\Database\Eloquent\Model::preventLazyLoading(!app()->isProduction());
    }
}
