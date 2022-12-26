<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use App\Models\Subscribe;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function subscribe(Request $request)
    // {
    //     $data=$request->all();
    //     Subscribe::create($data);
    //     return redirect()->back();
    // }

//     public function subscribe(Request $request){
//         $data=Subscribe::all();
//        // dd($request->all());
//        $data->save();
//         return redirect()->back();
// }


public function subscribe(Request $request){
         
    $data=new Subscribe();
    $data->subscribes=$request->input('subscribes');
    //
    $data->save();
    

    return redirect()->back();
}
}