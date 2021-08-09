<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SocialMediaLinkUpdate extends Component
{
    public $socialMediaLink;

    public $media_name;
    public $url;

    public function render()
    {
        $this->media_name = $this->socialMediaLink->media_name;
        $this->url = $this->socialMediaLink->url;

        return view('livewire.social-media-link-update');
    }

    public function update()
    {
        $validatedData = $this->validate([
            'media_name' => 'required',
            'url' => 'required|url',
        ]);

        $this->socialMediaLink->update($validatedData);
        $this->emit('exitUpdate');
    }
}
