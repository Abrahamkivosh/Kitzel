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

                                <div class="box-heading">
                                    <h3 class="h6 text-white text-uppercase">You are logged-in as:</h3>
                                </div>
                                <div class="box-content">

                                    <div class="dashboard-avatar mb-10">

                                        <div class="image">
                                            <img src="/images/image-man/01.jpg" alt="Image" />
                                        </div>

                                        <div class="content">
                                            <h6>{{ auth()->user()->name }}</h6>
                                            <p class="mb-15">{{ auth()->user()->role }}</p>
                                        </div>

                                    </div>

                                    <nav class="menu-vertical-01 mt-20">

                                        <ul>

                                            <li class="active"><a href="/admin/dashboard">Dashboard</a></li>
                                            <li><a href="/admin/tours1/create">Create Tour</a></li>
                                            <li><a href="#">Manage Tours</a></li>
                                            <li><a href="#">Booking</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">My Wishlist</a></li>
                                            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a></li>

                                        </ul>

                                    </nav>

                                    <p class="font-sm mt-20">Your last logged-in: <span class="text-primary font700">4 hours
                                            ago</span></p>

                                </div>

                            </div>

                        </aside>

                    </div>

                    <div class="col-12 col-lg-9">

                        <div class="content-wrapper">

                            <div class="form-draft-payment">

                                <h3 class="heading-title"><span>Create <span class="font200"> Upload Images for
                                            {{ $tour->tour_title }}</span></span></h3>

                                <div class="clear"></div>



                                <div class="row gap-30">



                                    <div class="col-12 ">


                                        <div class="card">
                                            <div class="card-body">


                                                <div class="mb-4 main-content-label">Add Tour Images </div>



                                                <form method="post"
                                                    action="{{ route('admin.store.tour.images', $tour->id) }}"
                                                    enctype="multipart/form-data" class="dropzone" id="dropzone">
                                                    @csrf
                                                </form>



                                            </div>
                                        </div>
                                        <!-- /Col -->
                                        <!-- row closed -->
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




@endsection

@section('head')
<meta name="_token" content="{{csrf_token()}}" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
@stop

@section('scripts')
  
<script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 12,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) 
        {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        },
                type: 'POST',
                url: '{{ route("deleteTourImage") }}',
                data: {filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ? 
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
   
        success: function(file, response) 
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script>

 
@stop
