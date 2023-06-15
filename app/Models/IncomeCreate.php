<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCreate extends Model
{
    use HasFactory;
    protected $table = "income_create";
    protected $fillable = ["name", "amount", "description", /*"image"*/];
}
