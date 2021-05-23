<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Memo;

class MemoCreate extends Component
{
    public $body;

    public function render()
    {
        return view('livewire.memo-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'body' => 'required',
            // 'comment' => 'nullable',
        ]);

        $validatedData['publish_date'] = date('Y-m-d');
        $validatedData['creator_id'] = Auth::user()->id;

        DB::beginTransaction();

        try {
            $memo = Memo::create($validatedData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
