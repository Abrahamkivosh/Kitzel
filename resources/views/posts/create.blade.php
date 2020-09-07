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

                            <div class="box-heading"><h3 class="h6 text-white text-uppercase">You're logged-in as:</h3></div>
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

                                        <li class="active"><a href="#">Dashboard</a></li>
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="#">My booking</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                        <li><a href="#">Logout</a></li>

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


                                        <form action="" id="posts" method="POST" class="form-horizontal">

                                            {{ csrf_field() }}


                                            <div class="form-group">

                                                <label class="form-label">Tittle</label>
                                                <input type="text" name="title" id="title" class="form-control">

                                            </div>
                                            <div class="form-group">

                                                <textarea class="form-control" name="body" id="body" rows="25" > </textarea>


                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="submit"></label>
                                                <div class="col-md-4">
                                                <button id="submit" name="submit" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>

                                        </fieldset>

                                        </form>




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
