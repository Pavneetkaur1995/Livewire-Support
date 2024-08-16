<?php

namespace App\Livewire;

use App\Models\SupportRequest;
use Livewire\Component;

class Support extends Component
{

    public $name;
    public $email;
    public $subject;
    public $details;
    public $success;
    // validating fields
    protected $rules = [
        'name' => 'required|max:100',
        'email' => 'required|email|max:150', 
        'subject' => 'max:200', 
        'details' => 'required|min:5|max:100', 

    ];

    public function submitForm()
    {
        $this->validate();
        // Save data into database table
        SupportRequest::create([
            'name'    => $this->name,
            'email'   => $this->email,
            'subject' => $this->subject,
            'details' => $this->details,
        ]);

        // Reset form after submit
        $this->reset(['name','email','subject','details']);
        // when data submitted successfully
        $this->success = 'Support request has been sent.';
        
    }

    public function render()
    {
        return view('livewire.support');
    }
}
