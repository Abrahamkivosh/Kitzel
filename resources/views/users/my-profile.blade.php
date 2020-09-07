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

                                        <li><a href="/admin/dashboard">Dashboard</a></li>
                                        <li><a href="/admin/@extends('layouts.site')

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
                                        <li><a href="/users/claims">Cancel & Refund</a></li>
                                        <li class="active"><a href="/users/my-profile">My Profile</a></li>
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

                            <h3 class="heading-title"><span>My <span class="font200"> profile</span></span></h3>

                            <div class="clear"></div>

                            <form>

                                <div class="row gap-30">

                                    <div class="col-6 col-sm-5 col-md-4 col-lg-4 order-lg-last">

                                        <div class="avatar-upload">
                                            <img class="profile-pic d-block" src="/images/image-man/01.jpg" alt="avatar" />
                                            <div class="upload-button text-secondary line-1">
                                                <div>
                                                <i class="fas fa-upload text-primary"></i>
                                                <span class="d-block font12 text-uppercase font700 mt-10 text-primary">Maximum file size:<br/>250 mb</span>
                                                </div>
                                            </div>
                                            <input class="file-upload" type="file" accept="image/*"/>
                                            <div class="labeling">
                                                <i class="fas fa-upload"></i> Change avatar
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-12 col-md-12 col-lg-8">

                                        <div class="col-inner">

                                            <div class="row gap-20">

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
                                                        <input type="email" id="postalcode" class="form-control"  placeholder="Country" />
                                                     </div>

                                                </div>


                                            </div>

                                            <hr class="mt-40 mb-40" />

                                            <div class="row gap-10 mt-15 justify-content-center justify-content-md-start">
                                                <div class="col-auto">
                                                    <a href="#" class="btn btn-primary">Save</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->




@endsection
">My Profile</a></li>
                                        <li><a href="#">My Bookings</a></li>
                                        <li class="active"><a href="/users/claims">Claim & Refund</a></li>
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

                            <h3 class="heading-title"><span>My <span class="font200"> profile</span></span></h3>

                            <div class="clear"></div>

                            <form>

                                <div class="row gap-30">



                                    <div class="col-12 ">

                                        <div class="col-inner">

                                            <div class="row gap-20">

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

                                            <hr class="mt-40 mb-40" />

                                            <div class="row gap-10 mt-15 justify-content-center justify-content-md-start">
                                                <div class="col-auto">
                                                    <a href="#" class="btn btn-primary">Save</a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
<!-- end Main Wrapper -->




@endsection
