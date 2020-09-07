@extends('layouts.site')

@section('head')

    <script src="https://js.stripe.com/v3/"></script>

@endsection

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
                                <li class="breadcrumb-item active" aria-current="page">Payment</li>
                            </ol>
                        </nav>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pt-30">


                @if (session()->has('success_message'))
                        <div class="spacer"></div>
                        <div class="alert alert-success">
                                {{ session()->get('success_message')}}
                        </div>
                @endif

                @if (count($errors) > 0)
                    <div class="spacer"></div>
                        <div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif





            <div class="row gap-20 gap-lg-40">

                <div class="col-12 col-lg-7">

                    <div class="content-wrapper">

                        <div class="form-draft-payment">

                            <form action="{{ route('booking.store')}}" method="POST" id="payment-form">

                                {{ csrf_field() }}

                                <h4 class="heading-title"><span>Billing Details</span></h4>

                                <div class="row gap-15 mb-15">

                                    <div class="col-12 col-md-12">

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="Name" class="form-control" id="Name" name="Name" value="{{ auth()->user()->name }}" readonly/>
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly/>
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
                                            <input type="text" id="address" class="form-control"  placeholder="Street 1" />
                                            <input type="text" class="form-control mt-10"  placeholder="Street 2 - Optional" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="email" id="city" class="form-control"  placeholder="Or city" />
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
                                            <input type="email" id="postalcode" class="form-control"  placeholder="Zipcde" />
                                         </div>

                                    </div>

                                    <div class="col-6 col-md-6">

                                        <div class="form-group">
                                            <label>Country</label>
                                            <select data-placeholder="Select" id="country" class="chosen-the-basic" tabindex="2">
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

                                <h4 class="heading-title"><span>Complete Your Booking <small class="font-sm text-muted">/ <i class="fas fa-lock"></i> secure</small></span></h4>



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
                                                        Payment with PayPal
                                                    </label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="BoxPayment-formCreditCard" class="payment-form">

                                        <p>The booking amount will be debited from your account once the booking is completed.</p>
                                        <h6>Please fill in your credit detail</h6>

                                        <div class="row gap-20 mb-15">
                                            <div class="col-12">
                                                <div class="form-group mb-0">
                                                    <label>Card name holder</label>
                                                    <input type="text" id="name_on_card" class="form-control" placeholder="Name of card owner" />
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group mb-0 ">
                                                    <label for="card-element">
                                                        Credit or debit card
                                                    </label>
                                                    <div id="card-element" class="form-control">
                                                        <!-- A Stripe Element will be inserted here. -->
                                                    </div>

                                                        <!-- Used to display form errors. -->
                                                    <div id="card-errors" role="alert"></div>
                                                </div>

                                                <button>Submit Payment</button>
                                            </div>




                                        </div>

                                    </div>

                                    <div id="BoxPayment-formPaypal" class="payment-form">

                                        <p>The booking amount will be debited from your account once the booking is completed.</p>
                                        <p>After clicking 'Book Now' you will be directed to Paypal to complete payment. <strong>You must complete the process or the booking will not occur </strong>. Afterwards you will be redirected to us again. </p>

                                        <div class="payment-option-item" id="paypal-button">

                                            <div class="d-inline-block" id="paypal-button"></div>

                                        </div>

                                    </div>

                                </div>


                                <hr class="mv-40">

                                <div class="row mt-20">

                                    <div class="col-sm-8 col-md-6">

                                        <button class="btn btn-primary">Book Now And Pay Later</button>


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


                                @forelse (\Cart::getContent() as $order)


                                <a href="#" class="tour-small-grid-01 mb-20 clearfix">

                                    <div class="image"><img src="images/image-bg/04.jpg" alt="image" /></div>
                                    <div class="content">
                                        <h6>{{ $order->associatedModel->tour_title }}</h6>
                                        <ul class="item-meta">
                                            <li><i class="elegent-icon-pin_alt text-warning"></i> {{ $order->associatedModel->tour_location }}</li>
                                            <li><strong>{{ $order->associatedModel->tour_duration }}</strong></li>
                                        </ul>
                                        <span class="price">Price from <span class="h6 line-1 text-primary number">€ {{ number_format(    $order->associatedModel->price ,2,".",",")   }}</span></span>
                                    </div>

                                </a>

                                <span class="font600 text-muted line-125">Your choosen date is</span>
                                <h4 class="line-125 choosen-date mt-3"><i class="ri-calendar"></i> {{$order->attributes->date }}
                                    <small class="d-block"></small>
                                </h4>

                                <ul class="border-top mt-20 pt-15">
                                    <li class="clearfix">Adults {{ $order->attributes->adult ." * € ". number_format( $order->associatedModel->price ,2,".",',')  }} guests<span class="float-right"> {{ $order->attributes->adult  * $order->associatedModel->price }} </span></li>
                                    <li class="clearfix">Children {{ $order->attributes->child  ." * ".
                                        number_format( $order->associatedModel->price  ,2,".",',')   }} <span class="float-right">{{ number_format( ($order->attributes->child  * $order->associatedModel->price) ,2,".",",")    }}</span></li>
                                    <li class="clearfix">Other fees<span class="float-right text-success">Free</span></li>
                                    <li class="clearfix border-top font700 text-uppercase">
                                        <div class="border-top mt-1">
                                        <span>Total</span><span class="float-right text-dark">  € {{  number_format(  \Cart::getTotal() , 2,"." ,",") }} </span>
                                        </div>
                                    </li>
                                </ul>

                                @empty

                                @endforelse




                                <p class="text-right font-sm">100% Satisfaction guaranteed</p>

                            </div>

                            <div class="box-bottom bg-light">
                                <h6 class="font-sm">We offer private tours</h6>
                                <p class="font-sm">Need more information? This is our direct call number <br><span class="text-primary">+351 914 629 008</span>.</p>
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



@section('scripts')




<script src="https://www.paypalobjects.com/api/checkout.js"></script>



<script>
paypal.Button.render({
    env: 'sandbox', // Or 'production'

    style: {
        size: 'medium',
        color: 'white',
        shape: 'rect',

    },
    // Set up the payment:
    // 1. Add a payment callback
    payment: function(data, actions) {
    // 2. Make a request to your server
    return actions.request.post('/api/create-payment')
        .then(function(res) {
        // 3. Return res.id from the response
        return res.id;
        });
    },
    // Execute the payment:
    // 1. Add an onAuthorize callback
    onAuthorize: function(data, actions) {
    // 2. Make a request to your server
    return actions.request.post('/api/execute-payment', {
        paymentID: data.paymentID,
        payerID:   data.payerID
    })
        .then(function(res) {
        // 3. Show the buyer a confirmation message.
        });
    }
}, '#paypal-button');
</script>










<script>


    ( function(){

        // Create a Stripe client.
            var stripe = Stripe('pk_test_51HGpfhC9kHz8KSZYtYosuZPEe8hFmqXlITwcFjOaldndQwvuuZriSDYYVYSt3tfqyrmnX7QUFVDvEg6RMmXL7XyI00Z2VZNAzs');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
                });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
            event.preventDefault();


                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_state: document.getElementById('country').value,
                    address_zip: document.getElementById('postalcode').value,
                }


            stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
                }
            });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
            }



    })();



</script>







<script>
    /**
    * Payment Option
    */
    $(".box-payment .payment-form").hide();
    $("input[name$='BoxPayment']").on("click",function() {
        var BoxPayment = $(this).val();
        $(".box-payment .payment-form").hide();
        $("#" + BoxPayment).show();
    });
</script>





@endsection
