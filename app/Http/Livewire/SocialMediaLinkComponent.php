<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\SocialMediaLink;

class SocialMediaLinkComponent extends Component
{
    public $createMode = false;
    public $displayMode = false;
    public $updateMode = false;
    public $deleteMode = false;

    public $updatingSocialMediaLink;
    public $displayinggSocialMediaLink;
    public $deletingSocialMediaLink;

    protected $listeners = [
        'exitCreate' => 'exitCreateMode',
        'confirmDeleteSocialMediaLink',
        'exitDelete' => 'exitDeleteMode',
        'deleteSocialMediaLink',
        'exitUpdate' => 'exitUpdateMode',
        'updateSocialMediaLink',
    ];

    public function render()
    {
        return view('livewire.social-media-link-component');
    }

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function enterDeleteMode()
    {
        $this->deleteMode = true;
    }

    public function exitDeleteMode()
    {
        $this->deletingSocialMediaLink = null;
        $this->deleteMode = false;
    }

    public function confirmDeleteSocialMediaLink(SocialMediaLink $socialMediaLink)
    {
        $this->deletingSocialMediaLink = $socialMediaLink;
        $this->enterDeleteMode();
    }

    public function deleteSocialMediaLink(SocialMediaLink $socialMediaLink)
    {
        $socialMediaLink->delete();
        $this->exitDeleteMode();
        $this->emit('updateList');
    }

    public function enterUpdateMode()
    {
        $this->updateMode = true;
    }

    public function exitUpdateMode()
    {
        $this->updatingSocialMediaLink = null;
        $this->updateMode = false;
    }

    public function updateSocialMediaLink(SocialMediaLink $socialMediaLink)
    {
        $this->updatingSocialMediaLink = $socialMediaLink;
        $this->enterUpdateMode();
    }
}
