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
                                <li class="breadcrumb-item"><a href="#">Country</a></li>
                                <li class="breadcrumb-item"><a href="#">City</a></li>
                                <li class="breadcrumb-item"><a href="#">Tour detail</a></li>
                                <li class="breadcrumb-item"><a href="#">Payment</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Confirmation</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pt-50 mt-80">

            <div class="row justify-content-center">

                <div class="col-12 col-md-11 col-lg-10 col-xl-9">

                    <div class="content-wrapper">

                        <div class="success-icon-text">
                            <span class="icon-font  text-success"><i class="elegent-icon-check_alt2"></i></span>
                            <h4 class="text-uppercase letter-spacing-1">Congratulations!</h4>

                        </div>

                        <div class="mb-50"></div>

                        <div class="text-center">
                            <p class="lead mb-10">Hello {{ Auth::user()->name }}</p>
                            <h3 class="text-primary line-125 mv-10">Your booking is confirmed and complete with Kitzel Tours</h3>

                            <p>You can now manage your booking.</p>
                            <a href="#" class="btn btn-dark btn-lg btn-wide">Manage my booking</a>
                        </div>

                        <div class="mb-50"></div>


                        <div class="mb-50"></div>

                        <div class="row gap-20 cols-1 cols-lg-3">

                            <div class="col">

                                <a href="#" class="cta-small-item">

                                    <span class="icon-font">
                                        <i class="elegent-icon-printer"></i>
                                    </span>
                                    <h5>Print</h5>
                                    <span class="text-muted">Print package detail</span>

                                </a>

                            </div>

                            <div class="col">

                                <a href="#" class="cta-small-item">

                                    <span class="icon-font">
                                        <i class="elegent-icon-cloud-download_alt"></i>
                                    </span>
                                    <h5>Download</h5>
                                    <span class="text-muted">Download PDF doc</span>

                                </a>

                            </div>

                            <div class="col">

                                <a href="#" class="cta-small-item">

                                    <span class="icon-font">
                                        <i class="elegent-icon-volume-high_alt"></i>
                                    </span>
                                    <h5>Request</h5>
                                    <span class="text-muted">Special request</span>

                                </a>

                            </div>

                        </div>

                        <div class="mb-50"></div>



                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->






@endsection
