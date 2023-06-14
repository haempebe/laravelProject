<?php

namespace App\Http\Livewire\Pages\Income;

use App\Models\IncomeCreate;
use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    public $amount;
    public $description;
    // public $image;
    protected $rules = [
        'name' => 'required|min:1',
        'amount' => 'required|',
        'description' => 'required|',
        'image' => 'required|',
    ];

    public function incomeCreate()
    {
        $this->validate();

        IncomeCreate::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'description' => $this->description,
            // 'image' => $this->image,
        ]);
        session()->flash('message', 'New Income successfully created!');
        return redirect(route("income"));
        // return redirect()->to('/income');
    }

    public function render()
    {
        return view('livewire.pages.income.create-component')->layout('app.app');
    }
}
