<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class LogoutComponent extends Component
{
    // public function actionlogout()
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }

    public function render()
    {
        return view('livewire.pages.logout-component');
    }
}
