<?php

namespace App\Http\Controllers\Cart;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('frontend.carts.index', compact('carts'));
    }

    public function store(Request $request, $id)
    {
        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => $request->input('qty', 1)
        ]);
        return redirect('/cart')->with('message','Added to Cart Successfully');
    }

    // public function update(Request $request, $id)
    // {
    //     Cart::where('id', $id)->update([
    //         'qty' => $request->quantity,
    //     ]);
    //     return response()->json([
    //         'success' =>true
    //     ]);
    // }

    public function destroy($id){
        
        $post = Cart::find($id);
        $post->delete();

        return redirect ('/cart')->with('message' , 'Item Removed Successfully');
    }
}
