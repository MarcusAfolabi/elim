<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Testimony;
use App\Mail\TestimonyMail;
use Illuminate\Support\Facades\Mail;

class TestimonyForm extends Component
{
    public $name;
    public $phone;
    public $message;
    public $successMessage = 'Testimony Form well received';
    public $showSuccessModal;
    public $errorMessage;

    public function submitForm()
    {
        // Validate form data
        $this->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric|min:11|unique:appointments,phone',
            'message' => 'required|string|max:1000',
        ]);
        try {
        $testimonyData = [
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message
        ];
        Mail::to('info@rccg-elimsanctuary.org')->send(new TestimonyMail($testimonyData));
        // Create a new Testimony instance
            // $appointment = new Testimony ();
            // $appointment->name = $this->name;
            // $appointment->phone = $this->phone;
            // $appointment->message = $this->message;
            // $appointment->save();
            $this->successMessage = 'Testimony Form well received';
            $this->reset();
            $this->showSuccessModal = true;
        } catch (\Throwable $th) {
            info($th->getMessage());
            $this->errorMessage  = 'Internet Error. Please try again later';
        }
    }
    public function render()
    {
        return view('livewire.testimony-form');
    }
}
