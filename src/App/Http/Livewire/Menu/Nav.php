<?php

namespace Sosighty\CRUD\App\Http\Livewire\Menu;

use Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Nav extends Component
{
    public function render()
    {
        $tables = DB::select('SHOW TABLES');
        $tables = array_map('current',$tables);

        return view('CRUD::livewire.menu.nav', [
            'tabs' => $tables
        ]);
    }
}
