<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class NoticeUpdate extends Component
{
    public $notice;

    public $publish_date;
    public $title;
    public $description;
    public $status;
    public $comment;

    public function render()
    {
        $this->publish_date = $this->notice->publish_date;
        $this->title = $this->notice->title;
        $this->description = $this->notice->description;
        $this->status = $this->notice->status;
        $this->comment = $this->notice->comment;

        return view('livewire.notice-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'publish_date' => 'required|date',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'comment' => 'nullable',
        ]);

        DB::beginTransaction();

        try {
            $this->notice->update($validatedData);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $this->emit('exitUpdate');
    }
}
