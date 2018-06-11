<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
//use App\Http\Requests\ProductRequest;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Product::all();
        //$datos=Product::all();
        //return 
        $datos->toJson();
        return view('front.json', compact('datos'));
        
    }

}

?>