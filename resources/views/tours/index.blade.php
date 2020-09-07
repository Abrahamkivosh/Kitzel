@extends('layouts.site')

@section('content'))







<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper page-result pb-0">

        <div class="page-title bg-light mb-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tours</a></li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row equal-height gap-30 gap-lg-40">

                 <div class="col-12 col-lg-4">

                    <aside class="sidebar-wrapper pv">

                        <div class="secondary-search-box mb-30">

                            <h4 class="">Search</h4>

                            <form>

                                <div class="row">

                                    <div class="col-12">
                                        <div class="col-inner">
                                            <div class="form-group">
                                                <label>Tour Type</label>
                                                <select class="chosen-the-basic form-control form-control-sm" placeholder="Select one" tabindex="2">
                                                    <option></option>
                                                    <option>All</option>
                                                    <option>Adventure</option>
                                                    <option>City tour</option>
                                                    <option>Honeymoon</option>
                                                    <option>Cultural</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="col-inner">
                                            <div class="form-group">
                                                <label>Destination</label>
                                                <select class="chosen-the-basic form-control form-control-sm" placeholder="Select two" tabindex="2">
                                                    <option></option>
                                                    <option>All</option>
                                                    <option>Lisbon</option>
                                                    <option>Fatima</option>
                                                    <option>Arrábida</option>
                                                    <option>Nazare </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="col-inner">
                                            <div class="form-group">
                                                <label>When</label>
                                                <input type="text" class="form-control form-readonly-control air-datepicker" placeholder="Pick a month" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="col-inner ph-20 pv-15">
                                            <a href="#" class="btn btn-primary btn-block"><i class="ion-android-search"></i> search</a>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Price Range</h5></div>

                            <div class="box-content">
                                <input id="price_range" />
                            </div>

                        </div>

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Star Slider</h5></div>

                            <div class="box-content">
                                <input id="star_range" />
                            </div>

                        </div>

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Starting Point</h5></div>

                            <div class="box-content">

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerStartPoint-01" name="filerStartPoint" checked>
                                    <label class="custom-control-label" for="filerStartPoint-01">Pena </label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerStartPoint-02" name="filerStartPoint" >
                                    <label class="custom-control-label" for="filerStartPoint-02">Fatima </label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerStartPoint-03" name="filerStartPoint" >
                                    <label class="custom-control-label" for="filerStartPoint-03">Miradouro das Portas do Sol </label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerStartPoint-04" name="filerStartPoint" >
                                    <label class="custom-control-label" for="filerStartPoint-04">Templo de Diana</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerStartPoint-05" name="filerStartPoint" >
                                    <label class="custom-control-label" for="filerStartPoint-05">Santuario Nacional de Cristo Rei  </label>
                                </div>

                                <div id="filerStartPointShowHide" class="collapse">

                                    <div class="collapse-inner">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filerStartPoint-06" name="filerStartPoint" >
                                            <label class="custom-control-label" for="filerStartPoint-06">Tomar</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filerStartPoint-06" name="filerStartPoint" />
                                            <label class="custom-control-label" for="filerStartPoint-06">Santuario Nacional de Cristo Rei</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filerStartPoint-07" name="filerStartPoint" />
                                            <label class="custom-control-label" for="filerStartPoint-07">Palácio Nacional e Jardins de Queluz</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="clear mb-10"></div>

                                <button class="btn btn-toggle btn-text-inherit text-primary text-uppercase font10 letter-spacing-2 font600 collapsed collapsed-on padding-0" type="buttom" data-toggle="collapse" data-target="#filerStartPointShowHide">Show more (+)</button>
                                <button class="btn btn-toggle btn-text-inherit text-uppercase font10 letter-spacing-2 font600 collapsed collapsed-off padding-0" type="buttom" data-toggle="collapse" data-target="#filerStartPointShowHide">Show less (-)</button>

                            </div>

                        </div>

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Endong Point</h5></div>

                            <div class="box-content">

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerEndPoint-01" name="filerEndPoint" checked>
                                    <label class="custom-control-label" for="filerEndPoint-01">Castelo de Óbidos </label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerEndPoint-02" name="filerEndPoint" >
                                    <label class="custom-control-label" for="filerEndPoint-02"> Adraga </label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerEndPoint-03" name="filerEndPoint" >
                                    <label class="custom-control-label" for="filerEndPoint-03">Santuario Nacional de Cristo Rei</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerEndPoint-04" name="filerEndPoint" >
                                    <label class="custom-control-label" for="filerEndPoint-04">Castelo de Tomar</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="filerEndPoint-05" name="filerEndPoint" >
                                    <label class="custom-control-label" for="filerEndPoint-05">Centro Histórico de Évora  </label>
                                </div>

                                <div id="filerStartPointShowHide" class="collapse">

                                    <div class="collapse-inner">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filerEndPoint-06" name="filerEndPoint" />
                                            <label class="custom-control-label" for="filerEndPoint-06">Azeitao </label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filerEndPoint-07" name="filerEndPoint" />
                                            <label class="custom-control-label" for="filerEndPoint-07">Porto  </label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="filerEndPoint-08" name="filerEndPoint" />
                                            <label class="custom-control-label" for="filerEndPoint-08">Ericeira </label>
                                        </div>

                                    </div>

                                </div>

                                <div class="clear mb-10"></div>

                                <button class="btn btn-toggle btn-text-inherit text-primary text-uppercase font10 letter-spacing-2 font600 collapsed collapsed-on padding-0" type="buttom" data-toggle="collapse" data-target="#filerStartPointShowHide">Show more (+)</button>
                                <button class="btn btn-toggle btn-text-inherit text-uppercase font10 letter-spacing-2 font600 collapsed collapsed-off padding-0" type="buttom" data-toggle="collapse" data-target="#filerStartPointShowHide">Show less (-)</button>

                            </div>

                        </div>



                    </aside>

                </div>

                <div class="col-12 col-lg-8">


                    <div class="content-wrapper pv">

                        <div class="d-flex justify-content-between flex-row align-items-center sort-group page-result-01">
                            <div class="sort-box">
                                <div class="d-flex align-items-center sort-item">
                                    <label class="sort-label d-none d-sm-flex">Sort by:</label>
                                    <div class="sort-form">
                                        <select class="chosen-the-basic form-control" tabindex="2">
                                            <option value="sort-by-1">Name: A to Z</option>
                                            <option value="sort-by-2">Name: Z to A</option>
                                            <option value="sort-by-3">Price: Hight to Low</option>
                                            <option value="sort-by-4">Price: Low to High</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="sort-box">
                                <div class="d-flex align-items-center sort-item">
                                    <label class="sort-label d-none d-sm-flex">View as:</label>
                                    <ul class="sort-nav">
                                        <li><a href="#"><i class="fas fa-th"></i></a></li>
                                        <li><a href="#" class="active"><i class="fas fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tour-long-item-wrapper-01">





                            @if(count($tours) > 0)
                            @foreach($tours as $tour)



                            <figure class="tour-long-item-01">

                                <a href="/tours/{{$tour->id}}">

                                    <div class="d-flex flex-column flex-sm-row align-items-xl-center">

                                        <div>
                                            <div class="image">

                                                <img src="/storage/uploads/tours/{{$tour->featured}}"/>
                                            </div>
                                        </div>

                                        <div>
                                            <figcaption class="content">
                                                <h5 class="text text-capitalize" >{{ $tour->tour_title }}</h5>
                                                <ul class="item-meta">
                                                    <li>
                                                        <i class="elegent-icon-pin_alt text-warning"></i> {{ $tour->tour_location }}
                                                    </li>
                                                    <li>
                                                        <div class="rating-item rating-sm rating-inline clearfix">
                                                            <div class="rating-icons">
                                                                <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                            </div>
                                                            <p class="rating-text font600 text-muted font-12 letter-spacing-1">26 reviews</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <p>{{ $tour->tour_excerpt }} </p>
                                                <ul class="item-meta mt-15">

                                                    <li>
                                                        Tour Duration: <span class="font700 h6">{{ $tour->tour_duration }}</span>
                                                    </li>

                                                </ul>
                                                <p class="mt-3 mb-0">Price from: <span class="h6 line-1 text-primary font16">  <del> € {{ $tour->price }}  </del>  <span class="text text-success p3"  >  € {{ $tour->newPriceAfterDiscount($tour->price,$tour->discount) }}</span>  </span> <span class="text-muted mr-5"></span></p>
                                            </figcaption>
                                        </div>

                                    </div>

                                </a>

                            </figure>





                                @endforeach







                                <nav class="pager-wrappper mt-50">

                                    <div class="row pager-wrappper mt-50">
                                        <div class="col-md-12">
                                            <nav class="custom-pagination-nav">
                                                <ul class="pagination justify-content-center">

                                                    {{$tours->links()}}

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- Page Navigation end-->

                                </nav>










                                @else

                                    <p>No Active Tours Found </p>

                                @endif




                        </div>


                    </div>



                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->


@endsection
