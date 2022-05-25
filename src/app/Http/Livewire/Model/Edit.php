<?php

namespace Sosighty\CRUD\App\Http\Livewire\Model;

use Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Edit extends Component
{
    public $model_id, $model, $columns, $columns_type;

    public $data;

    public $rules = [];

    public function mount($model, $id){
        $this->model_id = $id;
        $this->model = $model;

        $this->data = DB::table($this->model)->where('id', $id)->get()->toArray();

        $this->columns = DB::getSchemaBuilder()->getColumnListing($this->model);
        $columns_type = DB::select( DB::raw('SHOW COLUMNS FROM `'.$model.'`'));

        $i = 0;
        foreach ($this->data[0] as $key => $col) {
            if($key != 'id'){
                $this->$key = $col;
                $this->rules[$key] = 'required';
            }
            $this->columns_type[$key] = $columns_type[$i]->Type;
            $i++;
        }
    }

    public function save()
    {
        $this->validate($this->rules);

        $columns = array();

        foreach ($this->columns as $col) {
            $columns[$col] = $this->$col;
        }

        $model = "App\Models\\".ucfirst(Str::singular($this->model));
        $entry = $model::find($this->model_id);
        $entry->update($columns);
    }

    public function render()
    {
        return view('CRUD::livewire.model.edit')->layout('CRUD::layouts.app');
    }
}
