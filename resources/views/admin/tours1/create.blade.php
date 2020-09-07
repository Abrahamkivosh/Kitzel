@extends('layouts.site')



@section('content')





<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper page-detail">

        <div class="page-title border-bottom pt-25 mb-0 border-bottom-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pt-30">

            <div class="row gap-20 gap-lg-40">


                <div class="col-12 col-lg-3">

                    <aside class="sticky-kit sidebar-wrapper">

                        <div class="bashboard-nav-box">

                            <div class="box-heading"><h3 class="h6 text-white text-uppercase">You are logged-in as:</h3></div>
                            <div class="box-content">

                                <div class="dashboard-avatar mb-10">

                                    <div class="image">
                                        <img src="/images/image-man/01.jpg" alt="Image" />
                                    </div>

                                    <div class="content">
                                        <h6>Jessica Nathan</h6>
                                        <p class="mb-15">Thailand</p>
                                    </div>

                                </div>

                                <nav class="menu-vertical-01 mt-20">

                                    <ul>

                                        <li class="active"><a href="/admin/dashboard">Dashboard</a></li>
                                        <li><a href="/admin/tours1/create">Create Tour</a></li>
                                        <li><a href="#">Manage Tours</a></li>
                                        <li><a href="#">Booking</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a></li>

                                    </ul>

                                </nav>

                                <p class="font-sm mt-20">Your last logged-in: <span class="text-primary font700">4 hours ago</span></p>

                            </div>

                        </div>

                    </aside>

                </div>

                <div class="col-12 col-lg-9">

                    <div class="content-wrapper">

                        <div class="form-draft-payment">

                            <h3 class="heading-title"><span>Create <span class="font200"> New Tour</span></span></h3>

                            <div class="clear"></div>



                                <div class="row gap-30">



                                    <div class="col-12 ">


                                        <div class="card">
                                            <div class="card-body">


                                                <div class="mb-4 main-content-label">Add Tour Information </div>

                                                    {!! Form::open(['action' => 'Admin\CreateTourController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}

                                                        <div class="form-group">
                                                            {{Form::label('tour_title', 'tour_title')}}
                                                            {{Form::text('tour_title', '' ,['class' => 'form-control', 'placeholder' => 'tour_title'])}}
                                                          </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                              <label for="">Tour Type </label>
                                                              <select class="form-control" name="category_id" id="category" title="Type of tour you are creating" >
                                                                  @forelse ($categories as $category)
                                                                       <option value="{{ $category->id }}" >{{ $category->name }} </option>
                                                                  @empty
                                                                      <option value="null" disabled class="text text-dager" >No Category Created</option>
                                                                  @endforelse


                                                              </select>
                                                            </div>

                                                          <div class="form-group col-md-4">
                                                            <label for="">Select tour guide </label>
                                                            <select class="form-control" name="guide_id" id="guide_id" title="Type of tour you are creating" >
                                                                @forelse ($tourGuides as $guide)
                                                                     <option value="{{ $guide->id }}" >{{ $guide->name }} </option>
                                                                @empty
                                                                    <option value="null" disabled class="text text-dager" >No tour guide yet </option>
                                                                @endforelse
                                                                tour_duration

                                                            </select>
                                                          </div>

                                                          {{-- <div class="form-group col-md-4">
                                                            {{Form::label('guide_id', 'guide_id')}}
                                                            {{Form::text('guide_id', '' ,['class' => 'form-control', 'placeholder' => 'guide_id'])}}
                                                          </div> --}}
                                                          <div class="form-group col-md-4">
                                                            {{Form::label('status', 'status')}}
                                                            {!! Form::select("status", ['pending'=>'pending', 'running'=>'running', 'finished'=>'finished', 'canceled'=>'canceled'], "", ["class"=> "form-control text text-capitalize text-center", "placeholder"=>"Select status"]) !!}
                                                            {{-- {{Form::text('status', '' ,['class' => 'form-control', 'placeholder' => 'status'])}} --}}
                                                        </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                {{Form::label('capacity', 'capacity')}}
                                                               {!! Form::number("capacity", "", ["class"=> "form-control", "placeholder"=>"total capacity"]) !!}

                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                {{Form::label('tour_location', 'tour_location')}}
                                                                {{Form::text('tour_location', '' ,['class' => 'form-control', 'placeholder' => 'tour_location'])}}
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                {{Form::label('tour_duration', 'tour_duration')}}
                                                                {{Form::text('tour_duration', '' ,['class' => 'form-control', 'placeholder' => 'tour_duration'])}}
                                                            </div>
                                                          </div>
                                                          <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                {{Form::label('starting_point', 'starting_point')}}
                                                                {{Form::text('starting_point', '' ,['class' => 'form-control', 'placeholder' => 'starting_point'])}}
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                {{Form::label('ending_point', 'ending_point')}}
                                                                {{Form::text('ending_point', '' ,['class' => 'form-control', 'placeholder' => 'ending_point'])}}
                                                            </div>
                                                          </div>

                                                          <div class="custom-file">

                                                            <label for="inputAddress">Featured Image(Tour)</label>
                                                            {{Form::file('featured' ,['class' => 'form-control'])}}
                                                            <br>

                                                          </div>

                                                        <div class="form-group">
                                                            {{Form::label('price', 'price')}}
                                                            {{Form::text('price', '' ,['class' => 'form-control', 'placeholder' => 'price'])}}
                                                        </div>
                                                        <div class="form-group">
                                                            {{Form::label('Discount', 'discount')}}
                                                            {{Form::number('discount', '' ,['class' => 'form-control', 'placeholder' => 'Discount in % ','min'=>0,'max'=>100])}}
                                                        </div>


                                                        <div class="form-group">
                                                            {{Form::label('tour_excerpt', 'tour_excerpt')}}
                                                            {{Form::textarea('tour_excerpt', '' ,['class' => 'form-control', 'placeholder' => 'tour_excerpt','id'=>'tourExcerpt'])}}
                                                        </div>

                                                        <div class="form-group">
                                                            {{Form::label('tour_description', 'tour_description')}}
                                                            {{Form::textarea('tour_description', '' ,['class' => 'form-control', 'placeholder' => 'tour_description editor','id'=>'tourDescription'])}}
                                                        </div>
                                                        <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            {{Form::label('tour_Itinerary', 'tour_Itinerary')}}
                                                            {{Form::textarea('tour_Itinerary', '' ,['class' => 'form-control editor', 'placeholder' => 'tour_Itinerary','id'=>'tourItinerary'])}}
                                                          </div>
                                                          <div class="form-group col-md-6">
                                                            {{Form::label('additional_infoS', 'additional_infoS')}}
                                                            {{Form::textarea('additional_infoS', '' ,['class' => 'form-control editor', 'placeholder' => 'additional_infoS','id'=>'additionalInfoS'])}}
                                                          </div>
                                                        </div>
                                                        {{--  <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                            <label for="inputCity">City</label>
                                                            <input type="text" class="form-control" id="inputCity">
                                                          </div>
                                                          <div class="form-group col-md-4">
                                                            <label for="inputState">State</label>
                                                            <select id="inputState" class="form-control">
                                                              <option selected>Choose...</option>
                                                              <option>...</option>
                                                            </select>
                                                          </div>
                                                          <div class="form-group col-md-2">
                                                            <label for="inputZip">Zip</label>
                                                            <input type="text" class="form-control" id="inputZip">
                                                          </div>
                                                        </div>
                                                        <div class="form-group">
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                                            <label class="form-check-label" for="gridCheck">
                                                              Check me out
                                                            </label>
                                                          </div>
                                                        </div>--}}

                                                       {{form::submit('submit', ['class'=>'btn btb-primary'])}}


                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        <!-- /Col -->
                                    <!-- row closed -->
                                        </div>

                                    </div>

                                </div>



                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->




@endsection

@section('scripts')
 <script>

    var tourDescription = document.querySelector('#tourDescription');
    var tourItinerary = document.querySelector('#tourItinerary');
    var additionalInfoS = document.querySelector('#additionalInfoS');
    var tourExcerpt = document.querySelector('#tourExcerpt');

    ClassicEditor.create( additionalInfoS, { }).then((response) => { }) .catch(error => console.error(error));
    ClassicEditor.create( tourItinerary, { }).then((response) => { }) .catch(error => console.error(error));
    ClassicEditor.create( tourDescription, { }).then((response) => { }) .catch(error => console.error(error));
    ClassicEditor.create( tourExcerpt, { }).then((response) => { }) .catch(error => console.error(error));


</script>
@stop

