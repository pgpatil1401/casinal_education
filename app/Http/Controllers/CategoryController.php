<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\Controller\CategoryController;
use Illuminate\Http\Request;
use App\Models\Cotegory;

class CategoryController extends Controller
{
    public function index(Request $request){
      
        $categories= Cotegory::all();
      // dd($request->all());
        return view('list',"['categories'->$categories]");
    }
}
