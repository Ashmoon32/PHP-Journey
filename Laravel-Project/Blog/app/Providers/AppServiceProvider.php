<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

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
     Paginator::useBootstrap();

    //  $this->registerPolicies();

     Gate::define('comment-delete', function($user, $comment) {
        return $user->id === $comment->user_id;
     });

    }
}
