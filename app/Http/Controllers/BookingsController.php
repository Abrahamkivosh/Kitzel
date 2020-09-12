<?php

namespace App\Http\Controllers;

use App\Tour;

use App\order;

use App\OrderTour;

use Stripe;

use Cartalyst\Stripe\Exception\CardErrorException;

use Darryldecode\Cart\Cart;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

//use App\Tour;

class BookingsController extends Controller
{
    public function addTourToCart(Request $request ,$tour )
    {
        request()->validate(array(
            'date' => 'required',
            'adult'=> "numeric|nullable" ,
            'child'=> "numeric|nullable"
        ));
        $tour = Tour::find($tour) ;



        $data = $request->all();


        $newPrice = $tour->newPriceAfterDiscount($tour['price'],$tour->discount) ;



        $data['people'] = $data['adult'] + $data['child'] ;

            $rowId = Str::uuid() ; // generate a unique() row ID

            $adultPrice =   $newPrice * $data['adult'] ;//price for adult

            $childrenPrice =   ($newPrice / 2) * $data['child'] ;     //price for all children

            $totalPrice =  $adultPrice + $childrenPrice ;

            // add the tour to cart
            \Cart::add(array(
                'id' =>  time() ,
                'name' => $tour['tour_title'],
                'price' =>  $totalPrice ,
                //'quantity' => 1,
                'quantity' => $data['people'],
                'attributes' => array(
                    'newPrice'=> $newPrice ,
                    'date' => $data['date'] ,
                    'adult' =>  $data['adult'],
                    'child' =>  $data['child']
                ),
                'associatedModel' => $tour
            ));


            //return back()->with('success',$tour['tour_title'] ." Added to booking list  ") ;

            return redirect('/booking-checkout')->with('success',$tour['tour_title'] ." Added to booking list  ") ;

    }


    public function bookingCheckout()
    {
        return view('booking');
    }

    public function index(){

        //return view('/booking');

    }

    public function confirm(){

        //

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        try {
                $charge = Stripe::charges()->create([
                    'amount' => \Cart::getTotal() /128,
                    'currency' => 'EUR',
                    'source' => $request->stripeToken,
                    'description' =>'Order',
                    'receipt_email' => $request->email,
                    'metadata' => [

                            //'contents' => $contents,
                            //'quantity' =>Cart::instance('default')->count(),
                    ],
                ]);


                //insert into orders table

                $order = order::create([
                    'user_id' => auth()->user() ? auth()->user()->id : null,
                    'email' => $request->email,
                    'name' => $request->name,
                    'phone_number' => $request->phone_number,
                    'address' => $request->address,
                    'zip_code' => $request->zip_code,
                    'city' => $request->city,
                    'state' => $request->state,
                    'country' => $request->tour_title,
                    'discount' => $request->discount,
                    'price'=> \Cart::getTotal() /128,
                    'error' => null,

                ]);

                //insert into orders table


                foreach (\Cart::getContent() as $tour) {
                    OrderTour::create([
                        'order_id' => $order->id,
                        'tour_id' => $tour ['id'],
                        'name' => $tour ['name'],


                    ]);

                }





                \Cart::clear();


               // return back()->with('success_message', 'Thank you! Payment accepted successfully' );
               return view('/tour-confirmation')->with('success_message', 'Thank you! Payment accepted successfully' );



        } catch (CardErrorException $e) {
            return back()->withErrors('Error' . $e->getMessage());

        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
