<?php

namespace Sosighty\CRUD\App\Http\Livewire\Model;

use Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Show extends Component
{
    public $model_id, $model, $columns;

    public $data;

    public function mount($model, $id){
        $this->model_id = $id;
        $this->model = $model;
        $this->data = DB::table($this->model)->where('id', $id)->get()->toArray();
        $this->columns = DB::getSchemaBuilder()->getColumnListing($this->model);
    }

    public function render()
    {
        return view('CRUD::livewire.model.show')->layout('CRUD::layouts.app');
    }
}
