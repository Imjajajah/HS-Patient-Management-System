<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Models\Notification;

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
        // Share unread notifications with all views
        View::composer('*', function ($view) {
            // Check if the current route is 'notifications'
            $currentRoute = Route::currentRouteName();

            $notifications = ($currentRoute === 'notifications.allNotifications')
                ? Notification::orderBy('created_at', 'desc')->get() // Show all notifications
                : Notification::whereNull('read_at')->orderBy('created_at', 'desc')->get(); // Show unread notifications

            $view->with('notifications', $notifications);
        });
    }
}
