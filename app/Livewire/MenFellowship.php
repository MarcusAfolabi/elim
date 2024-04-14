<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\FellowshipRegistrationMail;

class MenFellowship extends Component
{
    public $name;
    public $email;
    public $address;
    public $city;
    public $state;
    public $phone;
    public $ageBracket;
    public $agebrackets = ['24-29', '30-35', '36-40', '41-45', '46-50', '51-55', '56-60', '61-65'];
    public $hobbies;
    public $occupation;

    public $successMessage = 'Men Fellowship Form well received';
    public $showSuccessModal;
    public $errorMessage;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'address' => 'required|string',
        'city' => 'required|string',
        'state' => 'required|string',
        'phone' => 'required|string',
        'ageBracket' => 'required|string',
        'hobbies' => 'nullable|string',
        'occupation' => 'nullable|string',
    ];
    public function submitForm()
    {
        $this->validate();
        $formData = [
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'phone' => $this->phone,
            'ageBracket' => $this->ageBracket,
            'hobbies' => $this->hobbies,
            'occupation' => $this->occupation,
        ];
        try {
            // Send data via email
            Mail::to('info@rccg-elimsanctuary.org')->send(new FellowshipRegistrationMail($formData));
            $this->successMessage = 'Men Fellowship Form well received';
            $this->reset();
            $this->showSuccessModal = true;

        } catch (\Throwable $th) {
            info($th->getMessage());
            $this->emit('formError', 'Failed to submit fellowship form. Please try again later.');
        }
    }

    public function render()
    {
        return view('livewire.men-fellowship');
    }
}
