<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){

        $cartitems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.checkout' , compact('cartitems'));
    }


    public function placeorder(Request $request){
        $order = new Order();
        $order->user_id = Auth::id();
        $order->namalengkap = $request->input('namalengkap');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->alamat = $request->input('alamat');
        $order->provinsi = $request->input('provinsi');
        $order->kota = $request->input('kota');
        $order->kecamatan = $request->input('kecamatan');
        $order->kodepos = $request->input('kodepos');

        $total = 0;
        $cartitems_total = Cart::where('user_id', Auth::id())->get();
        foreach ($cartitems_total as $prod) 
        {
            $total += $prod->posts->harga;
        }

        $order->total_price = $total;

        $order->tracking_no = 'ORDER-'.rand(1111,9999);
        $order->save();
        $order->id;

        $cartitems = Cart::where('user_id', Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id'=> $order->id,
                'product_id'=> $item->product_id,
                'qty'=> $item->qty,
                'harga'=> $item->posts->harga,
            ]);
        }

        if(Auth::user()->alamat == NULL){
            $user = User::where('id', Auth::id())->first();
            $user->namalengkap = $request->input('namalengkap');
            $user->phone = $request->input('phone');
            $user->alamat = $request->input('alamat');
            $user->provinsi = $request->input('provinsi');
            $user->kota = $request->input('kota');
            $user->kecamatan = $request->input('kecamatan');
            $user->kodepos = $request->input('kodepos');
            $user->update();
        }

        $cartitems = Cart::where('user_id', Auth::id())->get();
        Cart::destroy($cartitems);
        return redirect('/')->with('status', "Order Placed Successfully!");
  
    }
}


