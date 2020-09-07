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

                            <div class="box-heading"><h3 class="h6 text-white text-uppercase">{{ auth()->user()->name }}</h3></div>
                            <div class="box-content">

                                <nav class="menu-vertical-01 mt-20">

                                    <ul>

                                        <li><a href="/users/dashboard">My Bookings</a></li>
                                        <li class="active"><a href="/users/claims">Cancel & Refund</a></li>
                                        <li><a href="/users/my-profile">My Profile</a></li>
                                        <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Logout') }}
                                         </a></li>

                                    </ul>

                                </nav>

                                <p class="font-sm mt-20">Need Help?<br> This is our direct contact: <br><span class="text-primary font700">+351 914 629 008</span></p>

                            </div>

                        </div>

                    </aside>

                </div>

                <div class="col-12 col-lg-9">

                    <div class="content-wrapper">

                        <div class="form-draft-payment">

                            <h3 class="heading-title"><span>Refund <span class="font200"> Policy</span></span></h3>

                            <div class="clear"></div>




                            <!--CENTER SECTION-->
                            <div class="db-2">
                                <div class="db-2-com db-2-main">
                                    <div class="db-2-main-com db-2-main-com-table db-com-p">
                                        <h5>Claims & Refund</h5>
                                        <p>search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                        <h5>Where can I get some?</h5>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything </p>
                                        <h5>Why do we use it?</h5>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed</p>
                                        <h5>Where does it come from?</h5>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                                        <div class="db-mak-pay-bot">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>

                                            <hr class="mt-40 mb-40" />

                                            <div class="row gap-10 mt-15 justify-content-center justify-content-md-start">
                                                <div class="col-auto">

                                                <a href="#loginFormTabInModal-login" data-toggle="modal" data-target="#loginFormTabInModal" data-backdrop="static" data-keyboard="false" class="btn btn-secondary">
                                                    accept terms and claim a refund
                                                </a>

                                            </div>

                                            </div>


                                        </div>
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







<!-- start Login modal -->
<div class="modal fade modal-with-tabs form-login-modal" id="loginFormTabInModal" aria-labelledby="modalWIthTabsLabel" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content shadow-lg">

            <nav class="d-none">
                <ul class="nav external-link-navs clearfix">
                    <li><a class="active" data-toggle="tab" href="#loginFormTabInModal-login">Sign-in</a></li>
                    <li><a data-toggle="tab" href="#loginFormTabInModal-register">Register </a></li>
                    <li><a data-toggle="tab" href="#loginFormTabInModal-forgot-pass">Forgot Password </a></li>
                </ul>
            </nav>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="loginFormTabInModal-login">

                    <div class="form-login">

                        <div class="text-right pb-20">
                            <button type="button" class="close" data-dismiss="modal" aria-labelledby="Close">
                                <span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
                            </button>
                        </div>

                        <div class="form-header">
                            <h4>Welcome Back to SiteName</h4>
                            <p>Sign in to your account to continue using SiteName</p>
                        </div>

                        <div class="form-body">

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

                                        <input type="submit" class="btn btn-primary btn-send btn-wide mt-15" value="Submit Claim">

								</div>

							</form>

                        </div>

                    </div>

                </div>

            </div>


            <br>


        </div>
    </div>
</div>
<!-- end Login modal -->










@endsection
