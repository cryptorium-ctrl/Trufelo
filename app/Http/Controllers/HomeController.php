<?php

namespace App\Http\Controllers;

use App\Products;
use App\Recipes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $recipes = Recipes::all();

        return view('index')->with('products', $products)->with('recipes', $recipes);
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return back();
    }
}
