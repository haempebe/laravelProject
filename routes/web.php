<?php

use App\Http\Livewire\Pages\Admin;
use App\Http\Livewire\Pages\Member;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\HomeComponent;
use App\Http\Livewire\Pages\LoginComponent;
use App\Http\Livewire\Pages\IncomeComponent;
use App\Http\Livewire\Pages\LogoutComponent;
use App\Http\Livewire\Pages\SignupComponent;
use App\Http\Controllers\pages\finance\income;
use App\Http\Livewire\Pages\Expendition\Create;
use App\Http\Livewire\Pages\ExpenditionComponent;
use App\Http\Livewire\Pages\ControlPanelComponent;
use App\Http\Livewire\Pages\Income\CreateComponent;
use App\Http\Livewire\Pages\Income\UpdateComponent;
use App\Http\Controllers\pages\finance\expenditioncreate;

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

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::middleware(['guest'])->group(function () {
    Route::get("/login", LoginComponent::class)->name("login");
});

Route::middleware(['auth'])->group(function () {
    Route::get("/", HomeComponent::class)->name("dashboard");
    Route::get("/signup", SignupComponent::class)->name("signup");

    Route::prefix('user')->name("user.")->group(function () {
        Route::prefix('admin')->name("admin.")->group(function () {
            Route::get("", Admin::class)->name("index");
        });
        Route::prefix('member')->name("member.")->group(function () {
            Route::get("", Member::class)->name("index");
        });
    });

    Route::prefix('finance')->name("finance.")->group(function () {
        Route::prefix('controlpanel')->name("controlpanel.")->group(function () {
            Route::get("", ControlPanelComponent::class)->name("index");
            Route::get("/create", CreateComponent::class)->name("create");
            Route::post("/store", [ControlPanel::class, 'store'])->name("store");
        });
        Route::prefix('income')->name("income.")->group(function () {
            Route::get("", IncomeComponent::class)->name("index");
            Route::get("/create", CreateComponent::class)->name("create");
            Route::post("/store", [income::class, 'store'])->name("store");
            Route::get("/{incomeId}/update", UpdateComponent::class)->name("update");
            Route::delete("/{incomeId}/delete", [Income::class, 'destroy'])->name("destroy");
        });
        Route::prefix('expendition')->name("expendition.")->group(function () {
            Route::get("", ExpenditionComponent::class)->name("index");
            Route::get("/create", Create::class)->name("create");
            Route::post("/store", [expenditioncreate::class, 'store'])->name("store");
        });
    });
});
