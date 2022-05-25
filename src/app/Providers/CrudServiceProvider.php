<?php

namespace Sosighty\CRUD\App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

use Livewire;

class CrudServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../../../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../../../resources/views', 'CRUD');
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/sosighty/crud'),
        ]);
        Livewire\Livewire::component('nav', \Sosighty\CRUD\App\Http\Livewire\Menu\Nav::class);
        Livewire\Livewire::component('tab', \Sosighty\CRUD\App\Http\Livewire\Menu\Tab::class);

        Livewire\Livewire::component('show', \Sosighty\CRUD\App\Http\Livewire\Model\Show::class);
        Livewire\Livewire::component('index', \Sosighty\CRUD\App\Http\Livewire\Model\Index::class);
        Livewire\Livewire::component('edit', \Sosighty\CRUD\App\Http\Livewire\Model\Edit::class);
        Livewire\Livewire::component('create', \Sosighty\CRUD\App\Http\Livewire\Model\Create::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
