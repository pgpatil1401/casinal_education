<?php

namespace App\Models;
use App\Http\Controllers\ComapnyController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'address'];
}
