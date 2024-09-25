<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use App\Models\cart;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;


class ShoeController extends Controller
{
    //
    function index()
    {
        $data = Shoe::all();
        return view('shoe', ['shoes' => $data]);

    }

    function detail($id)
    {
        $data = Shoe::find($id);
        return view('detail', ['shoe' => $data]);
    }

    function addCart(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->user_id=$request->shoe_id;
            $cart->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }

    }

    static function ItemInCart()
    {
        $userId=Session::get('user')['id'] ;
        return cart::WHERE('user_id', $userId)->count();
    }

    function listCart()
    {
        $userId=Session::get('user')['id'] ;
        $shoes = DB::table('cart')
        ->join('shoes', 'cart.shoe_id', '=', 'shoe.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('listCart', ['shoes'=>$shoes]);
    }

    function removeCart($id)
    {
        cart::destroy($id);
        return redirect('listCart');
    }
}
