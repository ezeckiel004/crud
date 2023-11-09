<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate as Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define("administrateur", function(User $user){
            return $user->hasRole('admin');
        });

        Gate::define("manager", function(User $user){
            return $user->hasRole('manager');
        });

        Gate::define("user", function(User $user){
            return $user->hasRole('user');
         });
    }       
}