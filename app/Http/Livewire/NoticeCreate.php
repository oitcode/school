<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Notice;

class NoticeCreate extends Component
{
    public $title;
    public $description;
    public $comment;

    public function render()
    {
        return view('livewire.notice-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'comment' => 'nullable',
        ]);

        $validatedData['publish_date'] = date('Y-m-d');
        $validatedData['status'] = 'new';

        DB::beginTransaction();

        try {
            $notice = Notice::create($validatedData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $this->emit('exitCreate');
    }

    public function resetInputFields()
    {
        $this->title = "";
        $this->description = "";
        $this->comment = "";
    }
}
