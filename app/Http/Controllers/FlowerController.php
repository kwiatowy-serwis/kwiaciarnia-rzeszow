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
        return  \App\Http\Resources\Flower::collection(\App\Flower::all());
    }

    public function order(Request $request)
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];

        $flower = \App\Flower::find($id);


        if(!$flower || empty($flower))
        {
            return ['data' => 'There is no flower with id: ' . $id];
        }

        if($flower->quantity < $quantity)
        {
            return ['data' => 'You want to order more flower than we have. You want '. $quantity . ' but we have ' . $flower->quantity];
        }

        $flower->quantity -= $quantity;
        $flower->save();

        return ['data' => 'Your order will be processed'];
    }

    public function companyPlace()
    {
        return ['data' => [
            'city' => 'Rzeszow',
            'street' => 'Rejtana 16',
            'zip-code' => '35-456',
            'localNumber' => '5',
            'phone' => '456654456'
        ]];
    }


}
