<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Todo;

class TodoCreate extends Component
{
    public $title;
    public $body;
    public $status;

    public function render()
    {
        return view('livewire.todo-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'body' => 'nullable',
        ]);

        $validatedData['publish_date'] = date('Y-m-d');
        $validatedData['creator_id'] = Auth::user()->id;
        $validatedData['status'] = 'pending';

        DB::beginTransaction();

        try {
            $todo = Todo::create($validatedData);
            DB::commit();
            /* Todo: Should this is outside the try block? */
            $this->emit('todoAdded');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
