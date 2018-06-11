<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Product::orderBy('id','desc')->paginate();
        //$datos=Product::all();
        return view('front.inicio', compact('datos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.crear');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $producto =new Product;
        
        $producto->name=$request->name;
        $producto->short=$request->short;
        $producto->body=$request->body;

        $producto->save();

        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos=Product::find($id);
        return view('front.show', compact('datos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datos=Product::find($id);
        return view('front.edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $producto=Product::find($id);
        $producto->name = $request->name;
        $producto->short = $request->short;
        $producto->body = $request->body;

        //dd($request->body);
        $producto->save();

        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Product::find($id);
        $producto->delete();
        return back()-> with('info','El registro ha sido eliminado');
    }
    public function json()
    {
        $producto=Product::all();
        return response()
            ->json(['name' => 'Abigail', 'state' => 'CA']);
     //   return back();
    }

}
