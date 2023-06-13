<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class LogoutComponent extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.pages.logout-component');
    }
}
