<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Products extends Controller
{  public function index(){
    $rows = Product::all();

    return view('back-end.products.index',compact('rows'));
}
    public function create(){
        return view('back-end.products.create');
    }
    public function store(Request $request){
        $fileName = $this->fileUpload($request);
        $requestArray =  ['image' => $fileName] + $request->all()+['type'=>'product'];
        $row = Product::create($requestArray);
        return redirect()->route('products.index');
    }
    public function edit($id){
        $rows = Product::FindOrFail($id);
        return view('back-end.products.edite',compact('rows'));
    }
    public function update(Request $request,$id){
        $requestArray = $request->all();
        if($request->hasFile('image')){
            $fileName = $this->fileUpload($request);
            $requestArray = ['image' => $fileName] + $requestArray;
        }
        $row = Product::FindOrFail($id);
        $row->update($requestArray);
        return redirect()->route('products.index');
    }
    public function destroy($id)
    {
        Product::FindOrFail($id)->delete();

        return redirect()->route('products.index');
    }
 public function fileUpload(Request $request) {
    $this->validate($request, [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.'png';
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $name);
        // $this->save();

        return url('public/images/'.$name);
    }
    }


   public function getProductsResponse(){
       $products = Product::all();
              $response['pages'] = Page::all();
        if (Auth::guard('api')->check()) {
            foreach ($products as $product){
                $id = $product->id;
                $user = auth()->guard('api')->user();
                $user_id=$user->id;
                if (Favorite::where('user_id',$user_id."")->where('product_id',$id."")->first())
                {
                    $product['is_favorited'] = true;
                }else{
                    $product['is_favorited'] = false;
                }
                $response['user_details']=$user;
            }
        }
       $response['products'] = $products;
       $response['slider'] = DB::select("SELECT image FROM SLIDER");
        return response()->json($response);
    }
}
