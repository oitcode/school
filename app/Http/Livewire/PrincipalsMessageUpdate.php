<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

use App\PrincipalsMessage;

class PrincipalsMessageUpdate extends Component
{
    use WithFileUploads;

    public $principalsMessage;

    public $name;
    public $email;
    public $phone;
    public $message;
    public $image = null;

    public function render()
    {
        $this->name = $this->principalsMessage->name;
        $this->email = $this->principalsMessage->email;
        $this->phone = $this->principalsMessage->phone;
        $this->message = $this->principalsMessage->message;

        return view('livewire.principals-message-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'message' => 'required',
            'image' => 'image|nullable',
        ]);

        if ($this->image !== null) {
            $imagePath = $this->image->store('principals_message', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        $this->principalsMessage->update($validatedData);

        session()->flash('message', 'Updated');
        $this->emit('exitUpdate');
    }
}
