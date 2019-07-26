<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Products;
use App\OrderProduct;
use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shop.checkout');
    }

    public function complete()
    {
        return view('shop.complete');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        try{
//            $charge = Stripe::charges()->create([
//                'amount' => Cart::total() /100,
//                'currency' => 'EU',
//                'source' => $request->stripeToken,
//                'description' => 'Oder',
//                'receipt_email' => $request->email,
//                'metadata' => [
//
////                    //Change to Order ID after we start using BD
////                    'contents' => $contents,
////                    'quantity' => Cart::instance('default')->count(),
//                ],
//            ]);


            $order = $this->addToOrdersTable($request, null);
            //SEND EMAIL WHEN ORDER IS PLACED
            Mail::send(new OrderPlaced($order));

            //SUCCESSFUL
            Cart::instance('default')->destroy();
            session()->forget('coupon');

            return redirect('shop/complete')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
        } catch (Exception $e) {
            $this->addToOrdersTable($request, $e->getMessage());
            return back()->with('Error!' .$e->getMessage());
        }

        return $order;
    }

    protected function addToOrdersTable($request, $error) {

        //PUT INTO ORDERS TABLE
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_first_name' => $request->first_name,
            'billing_last_name' => $request->last_name,
            'billing_username' => $request->username,
            'billing_address' => $request->address,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' => $this->getNumbers()->get('discount'),
            'billing_discount_code' => $this->getNumbers()->get('coupon_code'),
            'billing_total' => $this->getNumbers()->get('total'),
            'error' => $error
        ]);

        //INSERT INTO ORDER_PRODUCT TABLE

        foreach(Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getNumbers()
    {
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $total = Cart::subtotal() - $discount;


        return collect([
            'discount'=>$discount,
            'coupon_code'=>$code,
            'total'=>$total
        ]);
    }

}
