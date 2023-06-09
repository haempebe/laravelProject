<?php

namespace App\Http\Livewire\Pages\Income;

use App\Models\User;

use App\Models\Income;
use Livewire\Component;

class CreateComponent extends Component
{

    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.income.create-component', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
