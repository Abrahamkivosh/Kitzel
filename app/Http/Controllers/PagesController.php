<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tour;
use App\Category;

class PagesController extends Controller
{
    public function index(){
        //return view('index');

        $categories = Category::all();
        $tours = Tour::inRandomOrder()->take(6)->get();
        //return view('index')->with('tours', $tours);
        return view('index', compact('tours', 'categories'));
    }


    public function pay(){
        return view('payment');
    }


    //public function details(){
       // return view('tour-details');
   // }


    public function about(){
        return view('about-us');
    }


    public function contact(){
        return view('contact-us');
    }


    public function privacy(){
        return view('privacy-policy');
    }


    public function error(){
        return view('404');
    }

    public function custom()
    {

        return view('custom-tours');

    }

    public function book()
    {
        return view('users/my-orders');
    }


}
