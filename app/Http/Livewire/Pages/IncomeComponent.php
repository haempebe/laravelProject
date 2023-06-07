<?php

namespace App\Http\Livewire\Pages;

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
        // $allIncome = Income::query()->latest()->get();
        return view('livewire.pages.income-component')->layout("app.app");
    }
}
