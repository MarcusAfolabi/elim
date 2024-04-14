<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Salvation;
use App\Mail\SalvationMail;
use Illuminate\Support\Facades\Mail;

class SalavationForm extends Component
{
    public $name;
    public $phone;
    public $address;
    public $prayer;
    public $successMessage = 'Salvation Form well received';
    public $showSuccessModal;
    public $errorMessage;

    public function submitForm()
    {
        // Validate form data
        $this->validate([
            'name' => 'required|string',
            'address' => 'required',
            'phone' => 'required|numeric|min:11',
            'prayer' => 'nullable|string',
        ]);

        // Create a new salvation instance
        try {
            // $salvation = new Salvation();
            // $salvation->name = $this->name;
            // $salvation->address = $this->address;
            // $salvation->phone = $this->phone;
            // $salvation->save();
            $salvationData = [
                'name' => $this->name,
                'address' => $this->address,
                'phone' => $this->phone,
                'prayer' => $this->prayer,
            ];
            Mail::to('rccgelimsanctuarylp37@gmail.com')->send(new SalvationMail($salvationData));
            $this->successMessage = 'Salvation Form well received';
            $this->reset();
            $this->showSuccessModal = true;
        } catch (\Throwable $th) {
            info($th->getMessage());
            $this->errorMessage  = 'Internet Error. Please try again later';
        }
    }
    public function render()
    {
        return view('livewire.salavation-form');
    }
}
