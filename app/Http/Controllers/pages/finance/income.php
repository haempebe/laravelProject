<?php

namespace App\Http\Controllers\pages\finance;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Income as ModelsIncome;

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
    // public function show(Request $request, string $id)
    // {
    // }

    // public function edit(string $id)
    // {
    //     $data = CategoriesBooks::where('name', $id)->first();
    //     return view('pages.categories.edit')->with('data', $data);
    // }

    // public function update(Request $request, string $id)
    // {
    //     $request->validate([
    //         'name' => 'required|unique:categories_books,name'
    //     ], [
    //         'name.required' => 'name cannot be blank',
    //         'name.unique' => 'name already taken'
    //     ]);
    //     $data = [
    //         'name' => $request->name,
    //     ];
    //     CategoriesBooks::where('id', $id)->update($data);
    //     return redirect()->to('perpus/categories')->with('success', 'Update data successfully');
    // }
    // public function destroy($id)
    // {
    //     CategoriesBooks::where('id', $id)->delete();
    //     return redirect()->to('perpus/categories')->with('success', 'The data has been successfully deleted');
    // }
}
