<?php

namespace App\Http\Controllers\pages\finance;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Income as ModelsIncome;
use App\Models\User;

class income extends Controller
{
    // public function index()
    // {
    //     $allCategories = CategoriesBooks::latest()->get();
    //     return view("pages.categories.index")->with('allCategories', $allCategories);
    // }
    // public function create()
    // {
    //     return view("livewire.pages.income.create-component");
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'account' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'name cannot be blank',
            'amount.required' => 'amount cannot be blank',
            'account.required' => 'account cannot be blank',
            'description.required' => 'description cannot be blank',
        ]);
        $data = [
            'name' => $request->name,
            'amount' => $request->amount,
            'account' => $request->account,
            'description' => $request->description
        ];
        ModelsIncome::create($data);
        return redirect()->route('finance.income.index')->with('success', 'added data successfully');
    }
    public function show(Request $request, string $incomeId)
    {
    }

    public function edit(string $incomeId)
    {
        $data = ModelsIncome::where('name', $incomeId)->first();
        $showUser = User::where('name', $incomeId)->first();
        return view("livewire.pages.income.edit", ['showUser' => $showUser, 'data' => $data]);
    }

    public function update(Request $request, string $incomeId)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'account' => 'required',
            'description' => 'required'
        ], [
            'name.required' => 'name cannot be blank',
            'amount.required' => 'amount cannot be blank',
            'account.required' => 'account cannot be blank',
            'description.required' => 'description cannot be blank',
        ]);
        $data = [
            'name' => $request->name,
            'amount' => $request->amount,
            'account' => $request->account,
            'description' => $request->description
        ];
        ModelsIncome::where('id', $incomeId)->update($data);
        return redirect()->to('perpus/categories')->with('success', 'Update data successfully');
    }
    public function destroy($incomeId)
    {
        ModelsIncome::where('id', $incomeId)->delete();
        return redirect()->route('finance.income.index')->with('success', 'The data has been successfully deleted');
    }
}
