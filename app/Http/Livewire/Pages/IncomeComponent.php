<?php

namespace App\Http\Livewire\Pages;

use App\Models\Income;
use Livewire\Component;

class IncomeComponent extends Component
{
    // public function destroy($incomeId)
    // {
    //     $findIncome = Income::find($incomeId);
    //     $findIncome->delete();
    //     session()->flash('message', 'Category ' . $findIncome->name . ' successfully deleted!');
    //     return redirect()->back();
    // }
    public function render()
    {
        $showIncome = Income::query()->latest()->get();
        return view('livewire.pages.income-component', [
            'showIncome' => $showIncome
        ])->layout("app.app");
    }
}
