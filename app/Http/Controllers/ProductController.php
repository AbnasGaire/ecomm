<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Cart;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function product(){
        $items= Product::all();

        return view('dashboard')->with(['items'=>$items]);
    }

    public function detail($id){
        $data=Product::find($id);
        return view('detail',compact(['data',$data]));
    }

    public function search(Request $req){
        $datas=Product::where('name' ,'like','%'.$req->search_data.'%')->get();
        return view('search',['datas'=>$datas]);
        
    }

    public function addtocart(Request $req,$id)

    {   
        $data= new Cart();
        $data->user_id=session()->get('user')->id;
        $data->product_id=$id;
        $data->save();
        return redirect('dashboard');
    }

    static public function cartdata(){
        $id=Session::get('user')['id'];
        return Cart::where('user_id',$id)->count();
        
    }

    function totalcart(){
        $id=Session::get('user')->id;
        $datas=DB::table('addtocart')
        ->join('products','addtocart.product_id','products.id')
        ->where('addtocart.user_id',$id)
        ->select('products.*')
        ->get();

        return view('addtocart',['datas'=>$datas]);
    }

    function remove($id)
    {
        $data=Cart::where('product_id',$id);
        $data->delete();
        return redirect('dashboard');
    }

    function buynow(){
        $id=Session::get('user')['id'];
        $data=DB::table('addtocart')
        ->join('products','addtocart.product_id','products.id')
        ->where('addtocart.user_id',$id)
        ->select('products.*')
        ->sum('products.price');

        return view('buynow',['data'=>$data]);

    }

    function logout(){
        Session::forget('user');
        return redirect('/');
    }


}



