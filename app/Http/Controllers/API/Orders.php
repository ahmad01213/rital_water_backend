<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Orders extends Controller
{
    public function store(Request $request){
        $row = $request->all();
        $row['user_id'] = auth()->user()->id;
        if($request->payment_type == 'نقاط'){
            $pointsperrial = DB::select('SELECT TEXT FROM PAGES WHERE TYPE = "points_per_rial" LIMIT 1');
           $totalPoints=(($request->total_cost)*(int)($pointsperrial[0]->TEXT));
            if(auth()->user()->points>$totalPoints){
                auth()->user()->points = auth()->user()->points-$totalPoints;
            }else{
                return;
            }
        }
        $points =((int)auth()->user()->points)+10;
        auth()->user()->update(['points'=>"$points"]);
        $order = Order::create($row);
        return response()->json(auth()->user()->points);
    }
    public function index(){
        $rows = Order::all();
        return view('back-end.orders.index',compact('rows'));
    }

      public function orderdetails($id){
          $order = Order::findOrFail($id);
          $jsonProducts = $order->products;
          $productsJson = json_decode($jsonProducts);
          foreach($productsJson as $item){
              $products[] = Product::findOrFail($item->productId);
              $quantities[] = $item->quantity;
          }
          return view('back-end.orders.edite',compact('products','quantities'));
        }


    public function update(Request $request,$id){
        $requestArray = $request->all();
        $row = Order::FindOrFail($id);
        $row->update($requestArray);
        return redirect()->route('orders.index');
    }


      public function userorders(){
          $user = Auth::user();
          $sql = "SELECT* FROM orders WHERE user_id = '$user->id'";
        $orders = Order::all();
      $row =   DB::select($sql);
        return response()->json($row);    }

}
