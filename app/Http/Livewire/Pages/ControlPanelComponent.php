<?php

namespace App\Http\Livewire\Pages;

use App\Models\Income;
use Livewire\Component;

class ControlPanelComponent extends Component
{
    public function render()
    {
        $totalIncome = Income::sum('amount');
        return view('livewire.pages.control-panel-component', ['totalIncome'=>$totalIncome])->layout('app.app');
    }
}
