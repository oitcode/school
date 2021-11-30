<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class NamedSms extends Component
{
    use WithFileUploads;

    public $contacts_file;
    public $message;

    public $contacts = [];

    public $totLines;

    public $startMode = true;
    public $previewMode = false;

    public function render()
    {
        return view('livewire.named-sms');
    }

    public function preview()
    {
        $validatedData = $this->validate([
            'contacts_file' => 'required|file|max:1024',
            'message' => 'required',
        ]);

        /* Put all contacts name and phone number in array */
        $this->filePath = $this->contacts_file->store('csvImports');
        $contents = Storage::get($this->filePath);

        $lines = explode("\n", $contents);

        /*
         * TODO:
         *
         * For some reason last line will be of one char. 
         * Dont know why. 
         *
         * Poping it out of array to be safe.
         *
         * Fix it!
         *
         */
        array_pop($lines);

        /* Remove the first header row of csv file. */
        array_shift($lines);

        $this->totLines = count($lines);

        foreach ($lines as $line) {
            $this->contacts[] = explode(',', $line);
        }

        $this->enterPreviewMode();
    }

    public function enterStartMode()
    {
        $this->startMode = true;
    }

    public function exitStartMode()
    {
        $this->startMode = false;
    }

    public function enterPreviewMode()
    {
        $this->exitStartMode();
        $this->previewMode = true;
    }

    public function exitPreviewMode()
    {
        $this->previewMode = false;
    }


    public function sendSms()
    {
        /* For each contact send sms */
        foreach ($this->contacts as $contact) {
            $message = 'Dear ' . $contact[0] . ' ' . $this->message;
            $args = http_build_query(array(
                'token' => 'foobar',
                'from'  => 'InfoSMS',
                'to'    => $contact[1],
                'text'  => $message));

            $url = "http://api.sparrowsms.com/v2/sms/";

            # Make the call using API.
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // Response
            $response = curl_exec($ch);
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
        }
    }
}
