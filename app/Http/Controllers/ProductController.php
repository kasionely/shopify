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
            'slugs'    => $products->getSlug()
        ]);
    }

    public function getBasketAdded(Request $request, Product $product)
    {
        if (!$basket = Basket::getBasket($product))
        {
            $user = self::getUser();

            $basket = new Basket([
                'product_id' => $product->id,
                'user_id'    => ($user) ? $user->id : NULL,
                'session_id' => Session::getId()
            ]);
        }

        $basket->qty = ($basket->qty) ? $basket->qty++ : 1;
        $basket->save();

        return redirect()->route('shop.index');
    }

    public function basketDelete(Product $product)
    {
        if ($basket = Basket::getBasket($product))
        {
            $basket->delete();
        }

        return redirect()->route('basket.list');
    }

    public function getBasketList()
    {
        $baskets = Basket::getBaskets();

        return view('shop.basket.index', [
            'baskets'    => $baskets,
            'totalPrice' => $baskets->totalPrice()
        ]);
    }

    public function getCheckout()
    {
        return view('shop.basket.checkout', ['total' => Basket::getBaskets()->totalPrice()]);
    }

    public function Checkout(Request $request)
    {
        if (Basket::getBaskets()->count() <= 0) {
            return redirect('')->route('shop.basket.index');
        }

        $order = new Order();

        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->city = $request->input('city');
        $order->address = $request->input('address');
        $order->comment = $request->input('comment');
        $order->payment = $request->input('payment');

        if( $user = self::getUser() )
        {
            $order->user_id = $user->id;
        }
        else
        {
            $order->session_id = Session::getId();
        }

        $order->save();

        $order->products()->delete();

        $products = [];

        foreach( Basket::getBaskets() as $basket )
        {
            $products[] = new Order\Product([
                'product_id'    => $basket->product->id,
                'product_price' => $basket->product->price,
                'quantity'      => $basket->qty
            ]);
        }

        $order->products()->saveMany($products);

        return redirect()->route('shop.index')->with('success', 'Ваша заявка успешно оформлена');
    }

    public function view(Request $request, Product $product)
    {
        $slug = $product->getSlug();

        return view('shop.chunks.item', [
            'product' => $product,
            'slug'    => $slug
        ]);

    }

    public function product(Request $request)
    {

    }
}