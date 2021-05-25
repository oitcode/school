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

    public $message;
    public $image = null;

    public function render()
    {
        $this->message = $this->principalsMessage->message;

        return view('livewire.principals-message-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'message' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($this->image !== null) {
            $imagePath = $this->image->store('principals_message', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        $this->principalsMessage->update($validatedData);
    }
}
