@extends('layouts.site')

@section('content')










<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper pb-lg-0">

        <div class="page-title bg-light mb-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Tours</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Custom tours</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row equal-height gap-0 gap-lg-30 gap-xl-40">

                <div class="col-12 col-lg-3">

                    <aside class="sidebar-wrapper pv on-left mb-50 mb-lg-0 w-100">

                        <nav class="menu-vertical-01">

                            <ul>

                                <li class="active"><a href="#">Lisbon</a></li>
                                <li><a href="#">Fatima</a></li>
                                <li><a href="#">Coimbra</a></li>
                                <li><a href="#">Evora</a></li>
                                <li><a href="#">Tomar</a></li>
                                <li><a href="#">Porto</a></li>

                            </ul>

                        </nav>

                        <div class="mb-40"></div>

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Download Brochure</h5></div>

                            <div class="box-content">

                                <a href="#" class="cta-small-item">
                                    <span class="icon-font">
                                        <i class="elegent-icon-cloud-download_alt"></i>
                                    </span>
                                    <h5>Download</h5>
                                    <span class="text-muted">PDF version</span>
                                </a>

                                <a href="#" class="cta-small-item">
                                    <span class="icon-font">
                                        <i class="elegent-icon-cloud-download_alt"></i>
                                    </span>
                                    <h5>Download</h5>
                                    <span class="text-muted">DOC version</span>
                                </a>

                                <a href="#" class="cta-small-item">
                                    <span class="icon-font">
                                        <i class="elegent-icon-cloud-download_alt"></i>
                                    </span>
                                    <h5>Download</h5>
                                    <span class="text-muted">PPT version</span>
                                </a>

                            </div>

                        </div>

                        <div class="mb-40"></div>

                        <h6 class="font-sm line-1 mb-5">We offer private tours</h6>
                        <p class="font-sm line-125">Our custom tour program, direct call <span class="text-primary">+351 914 629 008</span>.</p>

                    </aside>

                </div>

                <div class="col-12 col-lg-9">

                    <div class="content-wrapper pt-50 pb-0 pb-lg-50">

                        <div class="image">
                            <img src="images/image-wide/01.jpg" alt="image" />
                        </div>

                        <div class="mb-50"></div>

                        <h3 class="heading-title"><span>Customize <span class="font200">Your Portugal Tour</span></span></h3>

                        <p>Smart mrs day which begin. Snug do sold mr it if such. Terminated uncommonly at at estimating. Man behaviour met moonlight extremity acuteness direction.</p>


                        <div class="mb-30"></div>




                        <form>
                            <div class="form-group">
                                <label for="inputAddress">Name</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                              </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Phone</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress2">Destination</label>
                              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label for="inputEmail4">Pickup Town</label>
                                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-8">
                                  <label for="inputPassword4">Pickup Address (Not more than 50km from Lisbon)</label>
                                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                              </div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputCity">Tour Days(Duration)</label>
                                <input type="text" class="form-control touch-spin-03 form-control-readonly" value="1" readonly />
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputState">No Of Adults (Age 13 - 99)</label>
                                <input type="text" class="form-control touch-spin-03 form-control-readonly" value="2" readonly />
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputZip">No Of Children (Age 4 - 12)</label>
                                <input type="text" class="form-control touch-spin-03 form-control-readonly" value="0" readonly />
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="inputZip">Tour Description</label>
                                <input type="textarea" class="form-control" id="tourDescription">
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Request Quote</button>
                        </form>




                        <hr class="mt-50 mb-40" />

                        <div class="cta-horizontal">

                            <h1>No destination for you!</h1>
                            <p>Didn't find the destination for you! Need a custom destination?</p>
                            <a href="#" class="btn btn-outline-dark btn-wide">Let's talk</a>

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

    ClassicEditor.create( tourDescription, { }).then((response) => { }) .catch(error => console.error(error));


</script>
@stop
