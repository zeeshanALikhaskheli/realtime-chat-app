<?php


namespace Zeeshan\ChatApp;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Zeeshan\ChatApp\Livewire\ChatComponent;

class ChatAppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'chatapp');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        Livewire::component('chat-component', ChatComponent::class);

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/chatapp'),
        ], 'chatapp-views');
    }

    public function register()
    {
        //
    }
}