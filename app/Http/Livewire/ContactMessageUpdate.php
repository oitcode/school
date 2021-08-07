<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ContactMessageUpdate extends Component
{
    public $contactMessage;

    public $sender_email;
    public $sender_phone;
    public $message;
    public $status;

    public function render()
    {
        $this->sender_email = $this->contactMessage->sender_email;
        $this->sender_phone = $this->contactMessage->sender_phone;
        $this->message = $this->contactMessage->message;
        $this->status = $this->contactMessage->status;

        return view('livewire.contact-message-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'sender_email' => 'required|email',
            'sender_phone' => 'required',
            'message' => 'required',
            'status' => 'required',
        ]);

        DB::beginTransaction();

        try {
            $this->contactMessage->update($validatedData);
            DB::commit();
            $this->emit('exitUpdate');
        } catch (\Exception $e) {
            DB::rollback();
        }
    }
}
