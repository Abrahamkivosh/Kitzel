@extends('layouts.site')

@section('content')





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
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>

                        <h4 class="mt-0 line-125">Contact</h4>

                    </div>

                </div>

            </div>

        </div>

        <div class="container pv-60">


            <div class="map-contact-wrapper">

            <div id="map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99579.84796031742!2d-9.230243371636234!3d38.743739595755294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19331a61e4f33b%3A0x400ebbde49036d0!2sLisbon%2C%20Portugal!5e0!3m2!1sen!2ske!4v1595888180978!5m2!1sen!2ske" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>

                <div class="infobox-wrapper contact-infobox">
                    <div id="infobox">
                        <div class="infobox-address">
                            <h6>We Are Here</h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mb-50"></div>

            <div class="row gap-50 gap-lg-0">

                <div class="col-12 col-lg-5 col-xl-4">

                    <h4 class="heading-title"><span>Drop us <span class="font200">a message:</span></span></h4>

                    <form id="contact-form" method="post" action="http://crenoveative.com/envato/gijalan/contact-2.php">

                        <div class="contact-successful-messages"></div>

                        <div class="contact-inner">

                            <div class="form-group">
                                <label for="form_name">Full Name *</label>
                                <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Your name is required.">
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_email">Email Address *</label>
                                <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_subject">Subject</label>
                                <input id="form_subject" type="text" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" rows="7s" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors text-danger"></div>
                            </div>

                            <input type="submit" class="btn btn-primary btn-send btn-wide mt-15" value="Send message">

                        </div>

                    </form>

                </div>

                <div class="col-12 col-lg-6 ml-auto">

                    <h4 class="heading-title"><span>Contact <span class="font200">information:</span></span></h4>
                    <p class="post-heading">Any question? Send us a text and we will get back to you within 1 business day.</p>

                    <ul class="contact-list-01">

                        <li>
                            <span class="icon-font"><i class="ion-android-pin"></i></span>
                            <h6>Address</h5>
                            Lisbon, Portugal<br/><br/>
                        </li>

                        <li>
                            <span class="icon-font"><i class="ion-android-mail"></i></span>
                            <h6>Email</h5>
                            <a href="#">info@kitzeltours.com</a>
                        </li>

                        <li>
                            <span class="icon-font"><i class="ion-android-call"></i></span>
                            <h6>Phone</h5>
                            +351-914-629-008
                        </li>

                    </ul>

                    <div class="mb-50"></div>

                    <h4 class="heading-title"><span>Find <span class="font200">us on:</span></span></h4>

                    <div class="social-btns-01">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram "></i></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Tripadvisor"><i class="fab fa-tripadvisor"></i></a>
                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->




@endsection
