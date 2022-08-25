<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use SrmklivePayPalServicesExpressCheckout;

class CheckoutController extends Controller
{
    public function index(){
        if (session('cart')) {
            $cart = session()->get('cart');
            if(Auth::check()){
                return view('checkout', compact('cart')); 
            }else{
                return redirect('login');
            }

            // $order->user_id = Auth::user()->id;
        } else {
            return redirect()->back()->with('success', 'Cart is Empty!');
        }
        

    }

    // public function payWithPaypal()
    // {
    //     $cart = session()->get('cart');

    //     $totalAmount = 0;

    //     foreach ($cart as $item) {
    //         $totalAmount += $item['price'] * $item['qty'];
    //     }

    //     $order = new Order();
    //     $order->user_id = Auth::user()->id;
    //     $order->price = $totalAmount;
    //     $order->save();

    //     $data = [];

    //     foreach ($cart as $item) {
    //         $data['items'] = [
    //             [
    //                 'name' => $item['name'],
    //                 'price' => $item['price'],
    //                 'desc'  => $item['name'],
    //                 'qty' => $item['qty'],
    //             ]
    //         ];

    //         $orderItem = new OrderItem();
    //         $orderItem->order_id = $order->id;
    //         $orderItem->product_id = $item['id'];
    //         $orderItem->qty = $item['qty'];
    //         $orderItem->price = $item['price'];
    //         $orderItem->save();
    //     }

    //     $data['invoice_id'] = $order->id;
    //     $data['invoice_description'] = "Your Order #{$order->id}";
    //     $data['return_url'] = route('paypal-success');
    //     $data['cancel_url'] = route('paypal-cancel');
    //     $data['total'] = $totalAmount;

    //     // $provider = new ExpressCheckout;

    //     // $response = $provider->setExpressCheckout($data);

    //     // $response = $provider->setExpressCheckout($data, true);

    //     // return redirect($response['paypal_link']);
    // }

    // public function paypalSuccess()
    // {
    //     return 'Payment success!';
    // }

    // public function paypalCancel()
    // {
    //     return 'Payment canceled!';
    // }

    public function placeOrder(Request $request){
        $order = new Order();
        $order->user_id = Auth::id();
        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->telephone = $request->input('telephone');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->tracking_no = 'ec' .rand(1111, 9999);
        $order->save();

        $cartitems = session()->get('cart');

        foreach ($cartitems as $item) {
            OrderItem::create([
                'order_id' =>  $order->id,
                'prod_id' =>  $item['id'],
                'qty' =>  $item['qty'],
                'price' =>  $item['price'],
            ]);

            $prod = Product::where('id', $item['id'])->first();
            $prod->qty = $prod->qty - $item['qty'];
            $prod->update();
        }

        if(Auth::user()->address == NULL){
            $user = User::where('id', Auth::id())->first();
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->telephone = $request->input('telephone');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');

            $user->update();
        }

        $cartitems = session()->get('cart');
        session()->flush('cartitems');

        return redirect('/')->with('message', 'order placed successfully');
    }

    public function listOrder(){
        $data = OrderItem::join('products', 'products.id', '=', 'order_items.prod_id')
        
        ->get(['order_items.price','order_items.qty','order_items.order_id','order_items.prod_id','products.name', 'products.id']);
        // $prod_id = OrderItem::where('prod_id', '!=', 'NULL')->get(['prod_id'])->prod_id;
        // $prod_id = OrderItem::select('prod_id')->get()->toArray();
        // dd($prod_id);
        // $order_product = Product::where('id', $prod_id)->first();
        // dd($data);
        return view('order_history', compact('data'));
        
    }

    public function showOrder($id){
        $order = OrderItem::select('*')->where('prod_id', $id)->first();

        $order_id = OrderItem::select('order_id')->where('prod_id', $id)->first();
        $orderItem_id = $order_id->order_id;
        $view_item = Order::select('*')->where('id', $orderItem_id)->first();

        $order_item = OrderItem::select('prod_id')->where('prod_id', $id)->first();
        $prod_id = $order_item->prod_id;
        $view_order = Product::select('*')->where('id', $prod_id)->first();
     

        return view('order_info', compact('order','view_item', 'view_order'));
        
    }
}
 