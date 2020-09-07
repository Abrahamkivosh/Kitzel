@extends('layouts.site')

@section('content')



<!-- start Main Wrapper -->
<div class="main-wrapper scrollspy-container">

    <section class="page-wrapper pb-0">

        <div class="page-title bg-light mb-0">

            <div class="container">

                <div class="row gap-15 align-items-center">

                    <div class="col-12 col-md-7">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
                            </ol>
                        </nav>

                        <h4 class="mt-0 line-125">Blog</h4>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">


            <div class="row equal-height gap-0 gap-lg-30 gap-xl-40">


                <div class="col-12 col-lg-8">

                    <div class="content-wrapper pt-50 pb-0 pb-lg-50">



                                @if(count($posts) > 0)
                                @foreach($posts as $post)



                        <article class="post-long-01">


                            <div class="d-flex flex-column flex-sm-row align-items-xl-center">

                                <div>
                                    <div class="image">
                                        <img src="images/image-post/01.jpg" alt="images" />
                                    </div>
                                </div>

                                <div>
                                    <div class="content">
                                        <span class="post-date text-muted">Written on {{$post->created_at}}</span>
                                        <h4>{{$post->title}}</h4>
                                        <p>Prevailed sincerity behaviour to so do principle mr. As departure at no propriety zealously my. On dear rent if girl view. First on smart there he sense. </p>
                                        <a href="/posts/{{$post->id}}" class="h6">Read this <i class="elegent-icon-arrow_right"></i></a>
                                    </div>
                                </div>


                            </div>


                        </article>




                                    @endforeach




                                            <nav class="pager-wrappper mt-50">

                                                <div class="row pager-wrappper mt-50">
                                                    <div class="col-md-12">
                                                        <nav class="custom-pagination-nav">
                                                            <ul class="pagination justify-content-center">

                                                                {{$posts->links()}}

                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                                <!-- Page Navigation end-->

                                            </nav>



                                        @else

                                            <p>No Posts Found </p>

                                        @endif




                    </div>


                </div>






                <div class="col-12 col-lg-4">

                    <aside class="sidebar-wrapper pv on-right mb-50 mb-lg-0">

                        <div class="sidebar-box">

                            <div class="box-content">

                                <form class="quick-form-box">

                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Email address">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>



                        <!-- Recent entries widget-->

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Recent Posts</h5></div>

                            <div class="box-content">
                                <ul class="post-small-list">


                                        @if(count($posts) > 0)
                                        @foreach($posts as $post)


                                    <li class="clearfix">
                                        <a href="/posts/{{$post->id}}">
                                            <div class="image">
                                                <img src="images/image-square/01.jpg" alt="Popular Post" />
                                            </div>
                                            <div class="content">
                                                <h6>{{$post->title}}</h6>
                                                <p class="recent-post-sm-meta text-muted"><i class="ri ri-calendar mr-5"></i>{{$post->created_at}}</p>
                                            </div>
                                        </a>
                                    </li>




                                        @endforeach



                                        @else

                                            <p>No Recent Posts Found </p>

                                        @endif


                                </ul>

                            </div>

                        </div>

                        <div class="sidebar-box">

                            <div class="box-title"><h5>Tags</h5></div>

                            <div class="box-content">

                                <div class="tag-cloud clearfix">
                                    <a href="#" class="tag-item">Tours</a> <a href="#" class="tag-item">Adventures</a> <a href="#" class="tag-item">Create Memories</a>
                                    <a href="#" class="tag-item">Tour Portugual</a> <a href="#" class="tag-item">Lisbon</a> <a href="#" class="tag-item">What's In Fatima</a>
                                    <a href="#" class="tag-item">Travel</a> <a href="#" class="tag-item">Tours on Budget</a> <a href="#" class="tag-item">How To Book</a>
                                    <a href="#" class="tag-item">Amazing Deals</a> <a href="#" class="tag-item">Offers</a>
                                </div>

                            </div>

                        </div>


                        <div class="sidebar-box">

                            <div class="box-title"><h5>Meta</h5></div>

                            <div class="box-content">
                                <ul class="category-list">
                                    <li><a href="#">Rss Feed</a></li>
                                    <li><a href="#">Comments RSS</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
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
