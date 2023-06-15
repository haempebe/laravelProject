<?php

namespace App\Http\Livewire\Pages;

use App\Models\IncomeCreate;
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
        // $allIncome = IncomeCreate::query()->latest()->get();
        // dd($allIncome);
        return view('livewire.pages.income-component')->layout("app.app");
    }
}
