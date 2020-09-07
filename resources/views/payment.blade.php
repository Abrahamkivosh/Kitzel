@extends('layouts.site')

@section('content'))







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
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pt-30">

            <div class="row gap-20 gap-lg-40">

                <div class="col-12 col-lg-7">

                    <div class="content-wrapper">

                        <div class="form-draft-payment">

                            <form>

                                <h4 class="heading-title"><span>Traveller Details</span></h4>
                                <p class="post-heading">Already registered with Roomspoint? <a href="#loginFormTabInModal-login" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false">Login</a></p>

                                <h6>Traveller #1</h6>

                                <div class="row gap-15 mb-15">

                                    <div class="col-4 col-sm-3 col-md-2">

                                        <div class="form-group">
                                            <label>Title</label>
                                            <select data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                                <option value=""></option>
                                                <option>Mr.</option>
                                                <option>Mrs.</option>
                                                <option>Miss</option>
                                            </select>
                                         </div>

                                    </div>

                                    <div class="w-100 d-block d-md-none"></div>

                                    <div class="col-6 col-md-5">

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First name" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-5">

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-sm-6 col-md-7">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Email address" />
                                         </div>

                                    </div>

                                    <div class="col-12 col-sm-6 col-md-5">

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone number" />
                                         </div>

                                    </div>

                                </div>

                                <div class="mb-20"></div>

                                <div class="mb-60"></div>

                                <h4 class="heading-title"><span>Billing Address</span></h4>

                                <div class="row gap-15 mb-15">

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" placeholder="First name" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last name" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Company name</label>
                                            <input type="text" class="form-control" placeholder="Your company" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" placeholder="Phone number" />
                                         </div>

                                    </div>

                                    <div class="col-12 col-md-12">

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control"  placeholder="Street 1" />
                                            <input type="text" class="form-control mt-10"  placeholder="Street 2 - Optional" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Province</label>
                                            <input type="email" class="form-control"  placeholder="Or city" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>State</label>
                                            <input type="text" class="form-control"  placeholder="Or town" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Zipcde</label>
                                            <input type="email" class="form-control"  placeholder="Zipcde" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Country</label>
                                            <select data-placeholder="Select" class="chosen-the-basic" tabindex="2">
                                                <option value=""></option>
                                                <option>Thailand</option>
                                                <option>Malaysia</option>
                                                <option>Singapore</option>
                                                <option>Japan</option>
                                                <option>Germany</option>
                                                <option>Italy</option>
                                                <option>Indonesia</option>
                                                <option>Oman</option>
                                                <option>China</option>
                                                <option>Turkey</option>
                                                <option>Russia</option>
                                            </select>
                                         </div>

                                    </div>

                                </div>

                                <div class="mb-60"></div>

                                <h4 class="heading-title"><span>Finish Payment <small class="font-sm text-muted">/ <i class="fas fa-lock"></i> secure</small></span></h4>
                                <p class="post-heading">Excellent so to no sincerity smallness. Removal request delight if on he we.</p>

                                <div class="alert alert-info line-145 padding-30" role="alert">
                                    <h4 class="alert-heading line-125 mb-5">Congratulations!</h4>
                                    <p class="lead mb-10">You've got the best price at just <strong class="text-dark">$37.71</strong> per person</p>
                                    <hr class="mt-0 mb-10">
                                    <p class="mb-0">Prices may go up, so secure your reservation today. </p>
                                </div>

                                <div class="box-payment mt-20">

                                    <div class="row gap-20">

                                        <div class="col-6">

                                            <div class="payment-option-item">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="BoxPayment-CreditCard" name="BoxPayment" class="custom-control-input" value="BoxPayment-formCreditCard" />
                                                    <label class="custom-control-label text-muted" for="BoxPayment-CreditCard">
                                                        <img class="d-inline-block" src="images/image-payment/payment-credit-cards.jpg" alt="images" /><br/>
                                                        Payment with credit card
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="col-6">

                                            <div class="payment-option-item">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="BoxPayment-paypal" name="BoxPayment" class="custom-control-input" value="BoxPayment-formPaypal" />
                                                    <label class="custom-control-label text-muted" for="BoxPayment-paypal">
                                                        <img class="d-inline-block" src="images/image-payment/payment-paypal.jpg" alt="images" /><br/>
                                                        Payment with credit card
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="BoxPayment-formCreditCard" class="payment-form">

                                        <h5>Your Payment Total: $ 150.60 US</h5>
                                        <p>The booking amount will be debited from your account once the booking is completed.</p>
                                        <h6>Please fill in your credit detail</h6>

                                        <div class="row gap-20 mb-15">

                                            <div class="col-12">
                                                <div class="form-group mb-0">
                                                    <label>Card name holder</label>
                                                    <input type="text" class="form-control" placeholder="Name of card owner" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="form-group mb-0">
                                                    <label>Card number</label>
                                                    <input type="text" class="form-control mask-data-mask credit-card-number" placeholder="XXXX XXXX XXXX XXXXX" data-mask="0000 0000 0000 0000" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <div class="form-group mb-0">
                                                    <label>Expire</label>
                                                    <input type="text" class="form-control mask-data-mask credit-card-expire" placeholder="mm/yy" data-mask="00/00" />
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-2">
                                                <div class="form-group mb-0">
                                                    <label>CCV <i class="fas fa-info-circle text-primary" data-toggle="tooltip" data-placement="top" title="Had denoting properly jointure you occasion directly raillery. In said to of poor full be post face snug."></i></label>
                                                    <input type="text" class="form-control mask-data-mask credit-card-cvc" placeholder="XXX" data-mask="000" />
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div id="BoxPayment-formPaypal" class="payment-form">

                                        <h5>Your Payment Total: $ 150.60 US</h5>
                                        <p>The booking amount will be debited from your account once the booking is completed.</p>
                                        <p>After clicking 'Book Now' you will be directed to Paypal to complete payment. <strong>You must complete the process or the booking will not occur </strong>. Afterwards you will be redirected to us again. </p>

                                        <a href="#" class="btn btn-dark">Proceed to paypal</a>

                                    </div>

                                </div>

                                <hr class="mv-40">

                                <div class="custom-control custom-checkbox">
                                    <input id="formDraftPayment02-terms" name="formDraftPayment02-terms" type="checkbox" class="custom-control-input" value="paymentsCreditCard"/>
                                    <label class="custom-control-label" for="formDraftPayment02-terms">By submitting a booking request, you accept our <a href="#">terms and conditions</a> as well as the <a href="#">cancellation policy</a> and  <a href="#">house rules</a> .</label>
                                </div>

                                <div class="row mt-20">

                                    <div class="col-sm-8 col-md-6">

                                        <button class="btn btn-primary">Book Now</button>

                                        <p class="line-145 mt-20 font-italic font-sm"><span class="font600">** Prepared is me marianne</span>: pleasure likewise debating. Wonder an unable except better stairs do ye admire.</p>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-lg-5">

                    <aside class="sticky-kit sidebar-wrapper no-border">

                        <div class="booking-box">

                            <div class="box-heading"><h3 class="h6 text-white text-uppercase">Order detail</h3></div>
                            <div class="box-content">

                                <a href="#" class="tour-small-grid-01 mb-20 clearfix">

                                    <div class="image"><img src="images/image-bg/04.jpg" alt="image" /></div>
                                    <div class="content">
                                        <h6>Rome to Naples and Amalfi Coast Adventure</h6>
                                        <ul class="item-meta">
                                            <li><i class="elegent-icon-pin_alt text-warning"></i> Italy</li>
                                            <li><strong>3 days &amp; 2 night</strong></li>
                                        </ul>
                                        <span class="price">Price from <span class="h6 line-1 text-primary number">$125.99</span></span>
                                    </div>

                                </a>

                                <span class="font600 text-muted line-125">Your choosen date is</span>
                                <h4 class="line-125 choosen-date mt-3"><i class="ri-calendar"></i> 7 - 9 March, 2019 <small class="d-block">(3 days) <a href="#detail-content-sticky-nav-05" class="anchor font10 pl-40 d-block text-uppercase h6 text-primary float-right mt-5">Change</a></small></h4>

                                <ul class="border-top mt-20 pt-15">
                                    <li class="clearfix">$125.99 x 2 guests<span class="float-right">$251.98</span></li>
                                    <li class="clearfix">Booking fee + tax<span class="float-right">$9.50</span></li>
                                    <li class="clearfix pl-15">Book now &amp; Save<span class="float-right text-primary">-$15</span></li>
                                    <li class="clearfix">Other fees<span class="float-right text-success">Free</span></li>
                                    <li class="clearfix border-top font700 text-uppercase">
                                        <div class="border-top mt-1">
                                        <span>Total</span><span class="float-right text-dark">$248.58</span>
                                        </div>
                                    </li>
                                </ul>

                                <p class="text-right font-sm">100% Satisfaction guaranteed</p>

                            </div>

                            <div class="box-bottom bg-light">
                                <h6 class="font-sm">We are the best tour operator</h6>
                                <p class="font-sm">Our custom tour program, direct call <span class="text-primary">+66857887444</span>.</p>
                            </div>

                        </div>

                    </aside>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->







@endsection
