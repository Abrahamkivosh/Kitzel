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
                                <li class="breadcrumb-item"><a href="#">Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog single - right sidebar</li>
                            </ol>
                        </nav>

                        <h4 class="mt-0 line-125">Blog single - right sidebar</h4>

                    </div>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="row equal-height gap-0 gap-lg-40">

                <div class="col-12 col-lg-8">

                    <div class="content-wrapper pt-50 pb-0 pb-lg-50">

                        <article class="blog-single-wrapper">

                            <div class="image mb-40">
                                <img src="images/image-wide/01.jpg" alt="images" />
                            </div>

                            <div class="blog-single-heading">
                                <h3 class="text-capitalize line-125">{{$post->title}}</h3>
                                <ul class="meta-list text-muted mb-20">
                                    <li>by <a href="#">Admin</a></li>
                                    <li>on January 09, 2019</li>
                                    <li>in <a href="#">Adventure</a>, <a href="#">Backpack</a></li>
                                    <li>32 comments</li>
                                </ul>
                            </div>

                            <div class="blog-entry mt-0">

                                <p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>

                                <div class="blockquote">She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Bed one supposing breakfast day fulfilled off depending questions. Whatever boy her exertion his extended. Ecstatic followed handsome drawings entirely mrs one yet outweigh. Of acceptance insipidity remarkably is invitation.</div>

                                <p>Abilities or he perfectly pretended so strangers be exquisite. Oh to another chamber pleased imagine do in. Went me rank at last loud shot an draw. Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking. </p>

                                <ul class="mb-15">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet</li>
                                            <li>Ac tristique libero</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                </ul>

                                <p>Up branch to easily missed by do. Admiration considered acceptance too led one melancholy expression. Are will took form the nor true. Winding enjoyed minuter her letters evident use eat colonel. He attacks observe mr cottage inquiry am examine gravity. Are dear but near left was. Year kept on over so as this of. She steepest doubtful betrayed formerly him. Active one called uneasy our seeing see cousin tastes its. Ye am it formed indeed agreed relied piqued. </p>

                                <p>Breakfast agreeable incommode departure it an. By ignorant at on wondered relation. Enough at tastes really so cousin am of. Extensive therefore supported by extremity of contented. Is pursuit compact demesne invited elderly be. View him she roof tell her case has sigh. Moreover is possible he admitted sociable concerns. By in cold no less been sent hard hill. </p>

                                <div class="row gap-30 mt-40">

                                    <div class="col-12 col-sm-6">
                                        <div class="col-inner">
                                            <h6>Tags:</h6>
                                            <div class="tag-cloud clearfix">
                                                <a href="#" class="tag-item">HTML5</a> <a href="#" class="tag-item">CSS3</a> <a href="#" class="tag-item">jQuery</a>
                                                <a href="#" class="tag-item">Creative</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 text-sm-right">
                                        <div class="col-inner">
                                            <h6>Share:</h6>
                                            <div class="box-socials clearfix">
                                                <a href="#" class="text-muted"><i class="fab fa-facebook-square"></i></a>
                                                <a href="#" class="text-muted"><i class="fab fa-twitter-square"></i></a>
                                                <a href="#" class="text-muted"><i class="fab fa-google-plus-square"></i></a>
                                                <a href="#" class="text-muted"><i class="fab fa-pinterest-square"></i></a>
                                                <a href="#" class="text-muted"><i class="fab fa-flickr"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <hr class="mt-40" />

                            <div class="blog-pager-wrapper">

                                <div class="row gap-30 gap-lg-60 mb-30 align-items-center">
                                    <div class="col-6">
                                        <h5 class="blog-pager-prev">
                                            <a href="blog-single.html">
                                                <span class="text-muted labeling font12 font400 letter-spacing-2"><i class="ri-arrow-left font14 mr-10"></i> Previous post</span>
                                                <div class="image">
                                                    <img src="images/image-square/01.jpg" class="img-circle" alt="blog" />
                                                </div>
                                                <span>Detract yet delight written farther his general.</span>
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="blog-pager-next">
                                            <a href="blog-single.html">
                                                <span class="text-muted labeling font12 font400 letter-spacing-2">Next post <i class="ri-arrow-right font14 ml-10"></i></span>
                                                <div class="image">
                                                    <img src="images/image-square/02.jpg" class="img-circle" alt="blog" />
                                                </div>
                                                <span>Latter remark hunted enough vulgar say man.</span>
                                            </a>
                                        </h5>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-50"></div>

                            <h4 class="heading-title"><span>Author</span></h4>

                            <div class="blog-author bg-light">
                                <div class="author-label">
                                    <img src="images/image-man/01.jpg" alt="author image" class="img-circle" />
                                </div>
                                <div class="author-details">
                                    <h5 class="heading"><a href="#">Christine Gateau</a></h5>
                                    <p>Prepared do an dissuade be so whatever steepest. Yet her beyond looked either day wished nay. By doubtful disposed do juvenile an. Now curiosity you explained immediate why behaviour. An dispatched impossible of of melancholy favourable. </p>
                                </div>
                            </div>

                            <div class="mb-50"></div>

                            <h4 class="heading-title"><span>9 comments</span></h4>

                            <div class="comment-wrapper">

                                <ul class="comment-item">
                                    <li>
                                        <div class="comment-avatar">
                                            <img src="images/image-man/03.jpg" alt="author image" />
                                        </div>
                                        <div class="comment-header">
                                            <a href="#" class="comment-reply">reply</a>
                                            <h6 class="heading mt-0">Ibrahim ibn al-Walid</h6>
                                            <span class="comment-time">23 minutes</span>
                                        </div>
                                        <div class="comment-content">
                                            <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                        </div>
                                        <ul class="comment-item">
                                            <li>
                                                <div class="comment-avatar">
                                                    <img src="images/image-man/01.jpg" alt="author image" />
                                                </div>
                                                <div class="comment-header">
                                                    <a href="#" class="comment-reply">reply</a>
                                                    <h6 class="heading mt-0">Ibrahim ibn al-Walid</h6>
                                                    <span class="comment-time">18 minutes</span>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                                </div>
                                                <ul class="comment-item">
                                                    <li>
                                                        <div class="comment-avatar">
                                                            <img src="images/image-man/02.jpg" alt="author image" />
                                                        </div>
                                                        <div class="comment-header">
                                                            <a href="#" class="comment-reply">reply</a>
                                                            <h6 class="heading mt-0">Admin</h6>
                                                            <span class="comment-time">16 minutes</span>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comment-avatar">
                                                            <img src="images/image-man/04.jpg" alt="author image" />
                                                        </div>
                                                        <div class="comment-header">
                                                            <a href="#" class="comment-reply">reply</a>
                                                            <h6 class="heading mt-0">Uthman ibn Affan</h6>
                                                            <span class="comment-time">5 minutes</span>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="comment-avatar">
                                                    <img src="images/image-man/02.jpg" alt="author image" />
                                                </div>
                                                <div class="comment-header">
                                                    <a href="#" class="comment-reply">reply</a>
                                                    <h6 class="heading mt-0">Admin</h6>
                                                    <span class="comment-time">22 minutes</span>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="comment-avatar">
                                            <img src="images/image-man/01.jpg" alt="author image" />
                                        </div>
                                        <div class="comment-header">
                                            <a href="#" class="comment-reply">reply</a>
                                            <h6 class="heading mt-0">Admin</h6>
                                            <span class="comment-time">23 days</span>
                                        </div>
                                        <div class="comment-content">
                                            <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-avatar">
                                            <img src="images/image-man/04.jpg" alt="author image" />
                                        </div>
                                        <div class="comment-header">
                                            <a href="#" class="comment-reply">reply</a>
                                            <h6 class="heading mt-0">Uthman ibn Affan</h6>
                                            <span class="comment-time">Nov, 23, 2013</span>
                                        </div>
                                        <div class="comment-content">
                                            <p>Received the likewise law graceful his. Nor might set along charm now equal green. Pleased yet equally correct colonel not one. Say anxious carried compact conduct sex general nay certain. Mrs for recommend exquisite household eagerness preserved now. My improved honoured he am ecstatic quitting greatest formerly. </p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="clear"></div>

                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-sm">Load More</a>
                                </div>

                            </div><!-- End Comment -->

                            <div class="mb-50"></div>

                            <h4 class="heading-title"><span>Leave your comment</span></h4>

                            <form method="post" action="http://crenoveative.com/envato/gijalan/post" class="comment-form">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="comment-name">Your Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="comment-name" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="comment-email">Your Email <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="comment-email" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="comment-message">Message <span class="text-danger">*</span></label>
                                            <textarea name="message" id="comment-message" class="form-control" rows="8"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-wide">Comment</button>
                                    </div>
                                </div>
                            </form>


                        </article>

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
