<?php

namespace App\Http\Controllers\pages\finance;

use App\Models\expendition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class expenditioncreate extends Controller
{
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
        expendition::create($data);
        return redirect()->route('finance.expendition.index')->with('success', 'added data successfully');
    }
}
