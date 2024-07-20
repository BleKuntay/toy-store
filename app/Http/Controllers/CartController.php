<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Auth::user()->cart;

        if (!$cart) {
            $cart = Cart::create(['user_id' => Auth::id()]);
        }

        return view('cart.index', compact('cart'));
    }

    public function add(Request $request, Toy $toy)
    {
        $cart = Auth::user()->cart;

        if (!$cart) {
            $cart = Cart::create(['user_id' => Auth::id()]);
        }

        $cartItem = $cart->items()->where('toy_id', $toy->toy_id)->first();

        if ($cartItem) {
            $cartItem->quantity += $request->input('quantity');
        } else {
            $cartItem = new CartItem([
                'toy_id' => $toy->toy_id,
                'quantity' => $request->input('quantity')
            ]);
            $cart->items()->save($cartItem);
        }

        $cartItem->save();

        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }

    public function remove(CartItem $cartItem)
    {
        $cartItem->delete();

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        $cartItem->update(['quantity' => $request->input('quantity')]);

        return redirect()->route('cart.index')->with('success', 'Cart updated!');
    }
}
