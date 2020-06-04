<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Product;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('admin/users');
        }
        
            public function home() {
                 $orders = Order::all();
                 $users = User::all();
                 $products=Product::all();
                 
                 $rows = $orders->take(10);
                 $counts = [$orders->count(),$products->count(),$users->count()];
                 return view('back-end.home.home',compact('rows','counts'));
                           }
    
    
    public function admin()
    {
        return redirect('login');
    }
}
