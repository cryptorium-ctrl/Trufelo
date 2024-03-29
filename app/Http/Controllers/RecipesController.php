<?php

namespace App\Http\Controllers;

use App\Recipes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_allrecipes()
    {
        $recipes = Recipes::all();

        return view('recipes.allrecipes')->with('recipes' ,$recipes);
    }

    public function index_Master()
    {
        $recipes = Recipes::all();

        return view('recipes.master-recipes')->with('recipes', $recipes);
    }

    public function index_MincedTurkey()
    {
        $recipes = DB::table('recipes')->where('name', 'Minced Turkey')->get();


        return view('recipes.minced-turkey')->with('recipes', $recipes);
    }

    public function index_SearedScallops()
    {
        $recipes = DB::table('recipes')->where('name', 'Seared Scallops')->get();

        return view('recipes.seared-scallops')->with('recipes', $recipes);
    }

    public function index_RibeYeWithTruffle()
    {
        $recipes = DB::table('recipes')->where('name', 'Ribeye With Truffles')->get();

        return view('recipes.ribeye-with-truffle')->with('recipes', $recipes);
    }


    public function index_TruffleGravy()
    {
       $recipes = DB::table('recipes')->where('name', 'Truffle Gravy')->get();

        return view('recipes.truffle-gravy')->with('recipes', $recipes);
    }

    public function index_Potatoes()
    {
        $recipes = DB::table('recipes')->where('name', 'Truffle Potatoes')->get();

        return view('recipes.truffle-potatoes')->with('recipes', $recipes);
    }

    public function index_Eggs()
    {
        $recipes = DB::table('recipes')->where('name', 'Truffle Eggs')->get();

        return view('recipes.truffle-eggs')->with('recipes', $recipes);
    }

    public function index_EggToast()
    {
        $recipes = DB::table('recipes')->where('name', 'Egg Toeast With Truffles')->get();

        return view('recipes.egg-toeast-with-truffles')->with('recipes', $recipes);
    }

    public function index_Risotto()
    {
        $recipes = DB::table('recipes')->where('name', 'Truffle Risotto')->get();

        return view('recipes.truffle-risotto')->with('recipes', $recipes);
    }

    public function index_KaleWithTruffle()
    {
        $recipes = DB::table('recipes')->where('name', 'Kale With Truffle')->get();

        return view('recipes.kale-with-truffle')->with('recipes', $recipes);
    }

    public function index_FrenchFries()
    {
        $recipes = DB::table('recipes')->where('name', 'Truffle French Fries')->get();

        return view('recipes.truffle-french-fries')->with('recipes', $recipes);
    }

    public function index_Sausages()
    {
        $recipes = DB::table('recipes')->where('name', 'Truffle Sausages')->get();

        return view('recipes.truffle-sausages')->with('recipes', $recipes);
    }

    public function index_BaconSandwich()
    {
        $recipes = DB::table('recipes')->where('name', 'Truffle Bacon Sandwich')->get();

        return view('recipes.bacon-sandwich-and-truffle-sauce')->with('recipes', $recipes);
    }

    public function index_Burger()
    {
        $recipes = DB::table('recipes')->where('name', 'Burger With Truffles')->get();

        return view('recipes.burger-with-truffles')->with('recipes', $recipes);
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
