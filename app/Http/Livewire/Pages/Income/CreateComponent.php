<?php

namespace App\Http\Livewire\Pages\Income;

use App\Models\Income;

use Livewire\Component;

class CreateComponent extends Component
{
    public $name;
    public $amount;
    public $description;
    public function createForm()
    {
        Income::create([
            'name' => $this->name,
        ]);

        // session()->flash('message', 'New Income successfully created!');
        // return redirect(route("income"));
    }

    public function render()
    {
        return view('livewire.pages.income.create-component')->layout('app.app');
    }
}
