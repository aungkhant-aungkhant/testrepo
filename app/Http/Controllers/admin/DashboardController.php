<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Model\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }


    public function index(){

        $user = Auth::user();
        if($user->product_permission == "all"){
            $products = Product::get();
            
            return view ('admin.home.show', compact('products'));
        }
        elseif ($user->product_permission != "all" && $user->product_permission != null){
            $permission = unserialize($user->product_permission);
            $products = Product::whereIn('id', $permission)->get();
            
            return view ('admin.home.show', compact('products'));
        }

        

    }
}
