<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SmsCreditComponent extends Component
{
    public $creditsAvailable;
    public $creditsConsumed;
    public $response;

    public function render()
    {

        $api_url = "http://api.sparrowsms.com/v2/credit/?".
            http_build_query(array(
            'token' => '<token-provided>',));

        $response = file_get_contents($api_url);
        $this->response = $response;

        return view('livewire.sms-credit-component');
    }
}
