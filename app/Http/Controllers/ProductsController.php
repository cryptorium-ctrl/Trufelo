<?php

namespace App\Http\Controllers;


use App\Products;
use App\Recipes;
use App\Weight;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index_allfresh()
    {
        $products = Products::all();


        return view('shop.allfresh')->with('products', $products);
    }


    public function index_summer()
    {
        $products = Products::all();

        return view('shop.fresh-summer')->with('products', $products);
    }

    public function index_winter()
    {
        $products = Products::all();

        return view('shop.fresh-winter')->with('products', $products);
    }

    public function index_white()
    {
        $products = Products::all();

        return view('shop.fresh-white')->with('products', $products);
    }

    public function index_truffled_products()
    {
        $products = Products::all();

        return view('shop.truffled-products')->with('products', $products);
    }

    public function index_black_truffle_oil()
    {
        $products = Products::all();
        $weights = Weight::all();

        return view('shop.black-truffle-oil')->with('products', $products)->with('weights', $weights);

    }

    public function index_white_truffle_oil()
    {
        $products = Products::all();

        return view('shop.white-truffle-oil')->with('products', $products);
    }

    public function index_truffle_vinegar()
    {
        $products = Products::all();

        return view('shop.truffle-vinegar')->with('products', $products);
    }

    public function index_cart_like()
    {
        $products = Products::all();

        return view('shop.cart')->with('products', $products);
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
        //
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


}

