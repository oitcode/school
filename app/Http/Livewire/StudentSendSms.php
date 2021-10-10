<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentSendSms extends Component
{
    public $student;

    public $message;
    public $parentPhoneNumber;

    public function render()
    {
        return view('livewire.student-send-sms');
    }

    public function sendSms()
    {
        $validatedData = $this->validate([
            'message' => 'required',
        ]);

        if (count($this->student->guardians) > 0) {
            foreach ($this->student->guardians as $guardian) {
                $this->parentPhoneNumber = $guardian->phone;
                break;
            }
        } else {
            // TODO
        }

        $args = http_build_query(array(
            'token' => 'foobar',
            'from'  => 'InfoSMS',
            'to'    => $this->parentPhoneNumber,
            'text'  => $this->message));

        $url = "http://api.sparrowsms.com/v2/sms/";

        /* Make the call using API. */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        /* Response */
        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // TODO: How to finish gracely
    }
}
