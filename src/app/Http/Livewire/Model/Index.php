<?php

namespace Sosighty\CRUD\App\Http\Livewire\Model;

use Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    public $model, $columns;

    public $rows_selected, $ids;

    public function mount($model){
        $this->model = $model;
        $this->columns = DB::getSchemaBuilder()->getColumnListing($this->model);
        $this->rows_selected = array();
        $this->ids = array();
    }

    public function updatedRowsSelected($value, $key){
        if($value){
            array_push($this->ids, $key);
        }else{
            unset($this->ids[array_search($key, $this->ids)]);
        }
    }

    public function delete(){
        $rules = [
            'rows_selected.*' => 'required'
        ];

        if($this->validate($rules)){
            $datas = DB::table($this->model)->whereIn('id', $this->ids);
            $datas->delete();
        }
    }

    public function render()
    {
        $datas = DB::table($this->model)->paginate(12);

        //dd($columns);
        return view('CRUD::livewire.model.index', [
            'datas' => $datas
        ])->layout('CRUD::layouts.app');
    }
}
