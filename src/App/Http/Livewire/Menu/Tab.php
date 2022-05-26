<?php

namespace Sosighty\CRUD\App\Http\Livewire\Menu;

use Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Tab extends Component
{
    public function render()
    {
        return view('CRUD::livewire.menu.tab');
    }
}
