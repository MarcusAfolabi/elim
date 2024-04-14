<?php

namespace App\Livewire;

use App\Mail\AppointmentFormMail;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;

class AppointmentForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $successMessage = 'Appointment Form well received';
    public $showSuccessModal;
    public $errorMessage;

    public function submitForm()
    {
        // Validate form data
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:11',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new Appointment instance
        try {
            // $appointment = new Appointment();
            // $appointment->name = $this->name;
            // $appointment->email = $this->email;
            // $appointment->phone = $this->phone;
            // $appointment->message = $this->message;
            // $appointment->save();
            $appointmentData = [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'message' => $this->message
            ];
            // Send data via email
            Mail::to('rccgelimsanctuarylp37@gmail.com')->send(new AppointmentFormMail($appointmentData));
            $this->successMessage = 'Appointment Form well received';
            $this->reset();
            $this->showSuccessModal = true;
        } catch (\Throwable $th) {
            info($th->getMessage());
            $this->errorMessage  = 'Internet Error. Please try again later';
        }
    }
    public function render()
    {
        return view('livewire.appointment-form');
    }
}
