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
                                <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
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

                                        <li class="active"><a href="/users/dashboard">My Bookings</a></li>
                                        <li><a href="/users/claims">Cancel & Refund</a></li>
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


                            <div class="clear"></div>




                            <h3 class='mb-3'><span>My <span class="font200"> Bookings</span></span></h3>
                            <br>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>





                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->




@endsection
