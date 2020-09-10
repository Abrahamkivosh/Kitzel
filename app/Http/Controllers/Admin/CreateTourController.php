<?php

namespace App\Http\Controllers\admin;

use App\Tour;
use App\User;


use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Image as AppImage;
use Image;
use PhpParser\Node\Stmt\Function_;

class CreateTourController extends Controller
{
    public function createImages($id)
    {
        $tour = Tour::findOrFail($id) ;
        return view('admin.tours1.createImages',compact('tour'));
    
    }
    

     public function  uploadImages(Request $request , $tour_id)

     {
 
         $this->validate($request, [
 
                 'file' => 'required',
                 'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048'
 
         ]);

         $tour = Tour::find($tour_id) ;
         
         if($request->hasfile('file'))
          {
 
           

                $filenameWithExt = $request->file('file')->getClientOriginalName();

                // Get just the filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get extension
                $extension = $request->file('file')->getClientOriginalExtension();
                // Create new filename
                $filenameToStore = $filename . '_' . time() . '.' . $extension;
    
                // Uplaod image
                $path = $request->file('file')->storeAs('public/uploads/tours/images', $filenameToStore);
              
            

                 $tour->images()->create(
                     ['image'=>  $filenameToStore ]
                 );
           
             return response()->json(['success'=> $filenameToStore]);


          }
 
        //  return back()->with('success', 'Your images  uploaded successfully');
     }

     public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
         $img =  AppImage::where('image',$filename)->first();
            
            if ($img->delete() ) {
                return  response()->json(['success'=> "Removed "])  ;
            } else {
                return  response()->json(['success'=> "Error "])  ;
            }
            
      
        
    }





    public function index()
    {
        $tours = Tour::all();
        return view('admin.tours1.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tourGuides = User::where('role','admin')->orderBy('id')->get();

        return view('admin/tours1/create', compact('categories','tourGuides'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                'tour_title' => 'required',
                'tour_location' => 'required'

        ]);

        //create post
        $tours = new Tour;
        $tours->tour_title = $request->input('tour_title');
        $tours->tour_location = $request->input('tour_location');
        $tours->starting_point = $request->input('starting_point');
        $tours->ending_point = $request->input('ending_point');
        $tours->tour_description = $request->input('tour_description');
        $tours->tour_Itinerary = $request->input('tour_Itinerary');
        $tours->additional_infoS = $request->input('additional_infoS');
        $tours->tour_duration = $request->input('tour_duration');



        // if($request->has('featured')){

        //     $avatar = $request->featured;

        //     $avatar_name = time() . $avatar->getClientOriginalName();
        //     $avatar_new_name = 'uploads/tours/' . $avatar_name;
        //     $new_avatar = Image::make($avatar->getRealPath())->resize(500, 500) ;
        //     $new_avatar->save($avatar_new_name);
        //     // $new_avatar->move('uploads/tours/', $avatar_new_name);
        //     $avatar = $avatar_new_name;
        //     $tours->featured = $avatar;
        // }

        if (file_exists($request->file('featured') ) || $request->has('featured')) {
            // Get filename with extension

            $filenameWithExt = $request->file('featured')->getClientOriginalName();

            // Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get extension
            $extension = $request->file('featured')->getClientOriginalExtension();
            // Create new filename
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            // Uplaod image
            $path = $request->file('featured')->storeAs('public/uploads/tours', $filenameToStore);
            // dd( $path);/
            // Upload image
            $tours->featured = $filenameToStore;


        }





        $tours->price = $request->input('price');
        $tours->discount = $request->input('discount');
        $tours->tour_excerpt = $request->input('tour_excerpt');
        $tours->capacity = $request->input('capacity');
        $tours->status = $request->input('status');
        $tours->guide_id = $request->input('guide_id');
        $tours->category_id = $request->input('category_id');
        $tours->save();

        return redirect('/admin/dashboard')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     *
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
