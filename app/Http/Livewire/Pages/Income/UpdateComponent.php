<?php

namespace App\Http\Livewire\Pages\Income;

use App\Models\User;
use App\Models\Income;
use Livewire\Component;

class UpdateComponent extends Component
{
    public $name;
    public $amount;
    public $account;
    public $description;
    public $incomeId;
    public $findIncome;
    public function mount($incomeId)
    {
        $this->findIncome = Income::findOrFail($incomeId);
        $this->incomeId = $this->findIncome->id;
        $this->name = $this->findIncome->name;
        $this->amount = $this->findIncome->amount;
        $this->account = $this->findIncome->account;
        $this->description = $this->findIncome->description;
    }

    protected $rules = [
        'name' => 'required|min:1',
    ];

    public function updateForm()
    {
        $this->validate();
        $updateIncome = Income::find($this->incomeId);
        $updateIncome->update([
            'name' => $this->name,
            'amount' => $this->amount,
            'account' => $this->account,
            'description' => $this->description
        ]);
        session()->flash('message', 'Category successfully updated!');
        return redirect()->route("Income");
    }
    public function render()
    {
        $showUser = User::query()->latest()->get();
        return view('livewire.pages.income.update-component', [
            'showUser' => $showUser
        ])->layout("app.app");
    }
}
