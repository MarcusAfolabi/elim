<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ChoirFormMail;
use Illuminate\Support\Facades\Mail;

class ChoirCard extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $gender;
    public $part;
    public $backup;
    public $score_song;
    public $genre;
    public $message;
    public $successMessage = 'Choir Form well received';
    public $showSuccessModal;
    public $errorMessage;

    public function submitForm()
    {
        // Validate form data
        $this->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'part' => 'required|string',
            'backup' => 'required|string',
            'score_song' => 'required|string',
            'genre' => 'required|string',
            'email' => 'required|email|unique:appointments,email',
            'phone' => 'required|numeric|min:11|unique:appointments,phone',
            'message' => 'required|string|max:1000',
        ]);

        // Create a new Appointment instance
        try {
            $choirData = [
                'name' => $this->name,
                'address' => $this->address,
                'gender' => $this->gender,
                'part' => $this->part,
                'backup' => $this->backup,
                'score_song' => $this->score_song,
                'genre' => $this->genre,
                'email' => $this->email,
                'phone' => $this->phone,
                'message' => $this->message
            ];
            // Send data via email
            Mail::to('info@rccg-elimsanctuary.org')->send(new ChoirFormMail($choirData));
            $this->successMessage = 'Choir Form well received';
            $this->reset();
            $this->showSuccessModal = true;
        } catch (\Throwable $th) {
            info($th->getMessage());
            $this->errorMessage  = 'Internet Error. Please try again later';
        }
    }
    public function render()
    {
        return view('livewire.choir-card');
    }
}
