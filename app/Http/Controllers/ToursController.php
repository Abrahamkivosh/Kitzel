<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;

use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;


class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::orderBy('created_at','desc')->paginate(6);
        //$tours = Tour::latest()->get();
        return view('tours/index')->with('tours', $tours);
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


        //Cart::add( $request->id, $request->name, $request->qty, $request->price )
        //$tours = $this->Tours->findProductById($request->input('Id'));
        Cart::add(uniqid(), $request->name, $request->input('price'), $request->input('qty'));
        $options = $request->except('_token', 'Id', 'price', 'qty');
                 //->associate('App\Tour');


        return redirect()->back()->with('message', 'Item added to cart successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);
        return view('tours/show')->with('tours', $tour);
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
