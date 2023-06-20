<?php

namespace App\Http\Livewire\Pages;

use App\Models\expendition;
use App\Models\Income;
use Livewire\Component;

class ControlPanelComponent extends Component
{
    public function render()
    {
        $totalIncome = Income::sum('amount');
        $totalExpendition = expendition::sum('amount');
        $totalRemaining = $totalIncome - $totalExpendition;
        return view('livewire.pages.control-panel-component', ['totalIncome' => $totalIncome, 'totalExpendition' => $totalExpendition, 'totalRemaining' => $totalRemaining])->layout('app.app');
    }
}
