<?php

use Illuminate\Support\Facades\Route;

use Sosighty\CRUD\App\Http\Livewire\Model\Index;
use Sosighty\CRUD\App\Http\Livewire\Model\Show;
use Sosighty\CRUD\App\Http\Livewire\Model\Edit;
use Sosighty\CRUD\App\Http\Livewire\Model\Create;

Route::middleware('web')->group(function () {
    Route::get('/index/{model}', Index::class)->name('model.index');
    Route::get('/show/{model}/{id}', Show::class)->name('model.show');
    Route::get('/edit/{model}/{id}', Edit::class)->name('model.edit');
    Route::get('/create/{model}', Create::class)->name('model.create');
});
