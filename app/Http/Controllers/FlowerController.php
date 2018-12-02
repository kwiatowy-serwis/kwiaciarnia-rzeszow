<?php

namespace App\Http\Controllers;

use App\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // TODO FAKER do not remove
//        $flowers = "anemon amarylis amarant aster azalia begonia dzwonek bergamotka jaskier kamelii goździk chryzantema kolombina koniczyna stokrotka stokrotka dalia szarotka pierwiosnka  naparstnica frezja gerbera stokrotka mieczyk hibiskus wrzos hiacynt ostrokrzew irys jaśmin ladys pantofel lawenda lilia nagietek majeranek mimoza narcyz orchidea brzoskwinia kwiat piwonia petunia różanecznik róże rozmaryn szałwia słonecznik  oset tymianek tulipan fiołek  cynia";
//
//        $flowers = explode(" ", $flowers);
//
//        foreach ($flowers as $flower)
//        {
//            if($flower == "" || is_null($flowers))
//            {
//                continue;
//            }
//            $flowerModel = new Flower();
//            $flowerModel->name = $flower;
//            $flowerModel->quantity = (int) rand(0, 100);
//            $flowerModel->save();
//        }

//        die(__FUNCTION__);
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
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function show(Flower $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function edit(Flower $flower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flower $flower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flower $flower)
    {
        //
    }
}
