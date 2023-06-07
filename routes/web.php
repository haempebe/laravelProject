<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\LoginComponent;
use App\Http\Livewire\Pages\IncomeComponent;
use App\Http\Livewire\Pages\SignupComponent;
use App\Http\Livewire\Pages\Income\CreateComponent;
use App\Http\Livewire\Pages\Income\UpdateComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", HomeComponent::class)->name("dashboard");
Route::get("/signup", SignupComponent::class)->name("signup");
Route::middleware(['guest'])->group(function () {
    Route::get("/login", LoginComponent::class)->name("login");
});

Route::middleware(['auth'])->group(function () {
    Route::get("/income", IncomeComponent::class)->name("income");
    Route::get("/income/create", CreateComponent::class)->name("income.create");
    Route::get("/income/{incomeId}/update", UpdateComponent::class)->name("income.update");
    Route::delete("/income/{incomeId}/delete", IncomeComponent::class)->name("income.destroy");
});
