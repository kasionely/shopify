<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\Product;
use App\Model\Basket;
use Illuminate\Http\Request;
use Session;
use Auth;

class ProductController extends Controller{

    public function getIndex(Request $request, Product $products)
    {
        return view('shop.index', [
            'products' => $products,
            'slugs'     => $products->getSlug()
        ]);
    }

    public function getBasketAdded(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('basket') ? Session::get('basket') : null;

        $basket = new Basket($oldCart);
        $basket->add($product, $product->id);

        $request->session()->put('basket', $basket);
        return redirect()->route('shop.index');
    }

    public function basketDelete($id)
    {
        $oldCart = Session::has('basket') ? Session::get('basket') : null;
        $basket = new Basket($oldCart);
        $basket->deleteItem($id);

        Session::put('basket', $basket);

        return redirect()->route('basket.list');
    }

    public function getBasketList()
    {
        if (!Session::has('basket'))
        {
            return view('shop.basket.index');
        }
        $oldCart = Session::get('basket');
        $basket  = new Basket($oldCart);

        return view('shop.basket.index', [
            'products' => $basket->items,
            'totalPrice' => $basket->totalPrice
        ]);
    }

    public function getCheckout()
    {
        if (!Session::has('basket'))
        {
            return view('shop.basket.index');
        }

        $oldBasket = Session::get('basket');
        $basket = new Basket($oldBasket);
        $total  = $basket->totalPrice;
        return view('shop.basket.checkout', ['total' => $total]);
    }

    public function Checkout(Request $request)
    {
        if (!Session::has('basket'))
        {
            return redirect('')->route('shop.basket.index');
        }
        $oldBasket = Session::get('basket');
        $basket = new Basket($oldBasket);
        $order  = new Order();

        $order->basket = serialize($basket);
        $order->firstname   = $request->input('firstname');
        $order->lastname    = $request->input('lastname');
        $order->email       = $request->input('email');
        $order->phone       = $request->input('phone');
        $order->city        = $request->input('city');
        $order->address     = $request->input('address');
        $order->comment     = $request->input('comment');
        $order->payment     = $request->input('payment');

        Auth::user()->orders()->save($order);

        Session::forget('basket');
        {
            return redirect()->route('shop.index')->with('success', 'Ваша заявка успешно оформлена');
        }
    }

    public function view(Request $request, Product $products, $id)
    {
        $product = $products->find($id);

        $slugs = $products->getSlug();

        return view('shop.chunks.item', [
            'product' => $product,
            'slug'    => $slugs
        ]);

    }

    public function product(Request $request)
    {

    }
}