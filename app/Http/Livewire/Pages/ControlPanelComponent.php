<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ControlPanelComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.control-panel-component')->layout('app.app');
    }
}
