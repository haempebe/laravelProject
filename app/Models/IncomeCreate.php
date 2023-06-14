<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCreate extends Model
{
    use HasFactory;
    protected $table = "income_creates";
    protected $fillable = ["name", "amount", "description", /*"image"*/];
}
