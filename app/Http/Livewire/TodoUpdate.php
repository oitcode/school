<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Todo;

class TodoUpdate extends Component
{
    public $todo;

    public $title;
    public $body;
    public $status;

    public function render()
    {
        $this->title = $this->todo->title;
        $this->body = $this->todo->body;
        $this->status = $this->todo->status;

        return view('livewire.todo-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'body' => 'nullable',
            'status' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $this->todo->update($validatedData);
            DB::commit();
            $this->emit('exitUpdate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
