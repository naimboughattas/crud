<?php

namespace Sosighty\CRUD\App\Http\Livewire\Model;

use Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Create extends Component
{
    public $model, $columns;

    public function mount($model){
        $this->model = $model;
        $this->columns = DB::getSchemaBuilder()->getColumnListing($this->model);
    }

    public function render()
    {
        $datas = DB::table($this->model)->paginate(15);

        //dd($columns);
        return view('CRUD::livewire.model.create', [
            'datas' => $datas
        ]);
    }
}
