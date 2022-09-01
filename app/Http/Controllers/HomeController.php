<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buy;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function redirect(){
        if (Auth::id()) {
            if (Auth::user()->usertype=='0') {
                return view('user.home');
            } else {
               return view('admin.home');
            }
            
        }
        else {
            return redirect()->back();
        }
    }
    public function buy(){
        return view('user.buy__view');
    }
    public function pay(Request $request){
        $buy = new buy;
        $buy->cointype=$request->cointype;
        $buy->price=$request->price;
        $buy->network=$request->network;
        $buy->wallet=$request->wallet;
        $buy->save();
        return redirect()->back()->with('message','payment under verification');
    }
}
