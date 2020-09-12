@extends('layouts.site')

@section('content'))
		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<section class="page-wrapper page-detail">

				<div class="page-title bg-light">

					<div class="container">

						<div class="row gap-15 align-items-center">

							<div class="col-12 col-md-7">

								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
										<li class="breadcrumb-item"><a href="#">Country</a></li>
										<li class="breadcrumb-item"><a href="#">City</a></li>
										<li class="breadcrumb-item active" aria-current="page">Tour detail</li>
									</ol>
								</nav>

							</div>

						</div>

					</div>

				</div>

				<div class="fullwidth-horizon-sticky none-sticky-hide">

					<div class="fullwidth-horizon-sticky-inner">

						<div class="container">

							<div class="fullwidth-horizon-sticky-item clearfix">

								<ul id="horizon-sticky-nav" class="horizon-sticky-nav clearfix">
									<li>
										<a href="#detail-content-sticky-nav-01">Overview</a>
									</li>
									<li>
										<a href="#detail-content-sticky-nav-02">Itinerary</a>
									</li>
									<li>
										<a href="#detail-content-sticky-nav-03">Map</a>
									</li>
									<li>
										<a href="#detail-content-sticky-nav-04">Whats included</a>
									</li>
									<li>
										<a href="#detail-content-sticky-nav-05">Availabilities</a>
									</li>
									<li>
										<a href="#detail-content-sticky-nav-06">FAQ</a>
									</li>
									<li>
										<a href="#detail-content-sticky-nav-07">Reviews</a>
									</li>
								</ul>

							</div>

						</div>
					</div>
                </div>




				<div class="container pt-30">






					<div class="row gap-20 gap-lg-40">

						<div class="col-12 col-lg-8">

							<div class="content-wrapper">



								<div id="detail-content-sticky-nav-01" class="detail-header mb-30">
                                    <h3>{{$tours->tour_title}}
                                    <span class="pl-5" >
                                        @auth
                                            @if (auth()->user()->role == "admin")
                                                <a href="{{ route('admin.create.tour.images',$tours->id) }}"  class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> Add Images</a>
                                            @endif
                                        @endauth
                                    </span>
                                </h3>

									<div class="d-flex flex-column flex-sm-row align-items-sm-center mb-20">
										<div class="mr-15 font-lg">
											<i class="elegent-icon-pin_alt text-warning"></i> {{ $tours->tour_location }}
										</div>
										<div>
											<div class="rating-item rating-inline">
												<div class="rating-icons">
													<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
												</div>
												<p class="rating-text font600 text-muted font-12 letter-spacing-1"><span class="text-dark mr-3">4.5/5</span> 26 11 reviews</p>
											</div>
										</div>
									</div>

									<div class="slick-gallery-slideshow detail-gallery mt-20 mb-40">

										<div class="slider gallery-slideshow">
											<div><div class="image"><img src="/storage/uploads/tours/{{$tours->featured}}" alt="{{ $tours->tour_title }}" /></div></div>


                                            @forelse ($tours->images as $image)
                                        <div><div class="image"><img src="/storage/uploads/tours/images/{{ $image->image }}" alt="{{ $tours->tour_title }}" /></div></div>
                                            @empty
                                            <div><div class="image"><img src="/images/image-gallery/thumb/02.jpg" alt="Images" /></div></div>
                                            @endforelse


										</div>
										<div class="slider gallery-nav">
											<div><div class="image"><img src="/storage/uploads/tours/{{$tours->featured}}" alt="{{ $tours->tour_title }}" /></div></div>

                                            @forelse ($tours->images as $image)
                                            <div><div class="image"><img src="/storage/uploads/tours/images/{{ $image->image }}" alt="{{ $tours->tour_title }}" /></div></div>
                                                @empty
                                                <div><div class="image"><img src="/images/image-gallery/thumb/02.jpg" alt="Images" /></div></div>
                                                @endforelse

										</div>

									</div>

                                    <h4 class="heading-title">Tour Introduction</h4>

									<ul class="list-inline-block highlight-list mt-30">
										<li>
											<span class="icon-font d-block">
												<i class="linea-icon-basic-chronometer"></i>
											</span>
											Tour Duration:<br /><strong>{{ $tours->tour_duration }}</strong>
										</li>

										<li>
											<span class="icon-font d-block">
												<i class="linea-icon-ecommerce-dollar"></i>
											</span>
											From<br /><strong>€{{ $tours->price }}</strong> /person
										</li>
									</ul>

                                    <div class="mb-30"></div>

                                    @php

                                    echo   $tours->tour_description  ;
                                    @endphp

									{{-- <p>	{{ $tours->tour_description }} </p> --}}

                                </div>



								<div class="mb-50"></div>

								<div id="detail-content-sticky-nav-02" class="fullwidth-horizon-sticky-section">

									<h4 class="heading-title">Itinerary</h4>

									<h6>Introduction</h6>

									<p>Become latter but nor abroad wisdom waited. Was delivered gentleman acuteness but daughters. In as of whole as match asked. Pleasure exertion put add entrance distance drawings. In equally matters showing greatly it as. Want name any wise are able park when. Saw vicinity judgment remember finished men throwing.</p>

									<ul class="itinerary-list mt-30">

										<li>

                                            @php

                                            echo   $tours->tour_Itinerary  ;
                                            @endphp

										</li>

									</ul>


									<div class="mb-50"></div>

								</div>

						{{--	<div id="detail-content-sticky-nav-03" class="fullwidth-horizon-sticky-section">

									<h4 class="heading-title">Map</h4>

									<div id="gmap-8" style="height: 450px;"></div>

									<div class="mb-50"></div>

								</div> --}}

								<div id="detail-content-sticky-nav-04" class="fullwidth-horizon-sticky-section">

									<h4 class="heading-title">Whats included</h4>

									<ul class="list-icon-absolute what-included-list mb-30">

										<li>
											<span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>
											<h6>Guide</h6>
											<p>Private guide and accompaniment to all monuments</p>
                                        </li>

                                        <li>
											<span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>
											<h6>Insurance</h6>
											<p>Compulsory insurance </p>
										</li>

										<li>
											<span class="icon-font"><i class="elegent-icon-check_alt2 text-primary"></i> </span>
											<h6>Transport</h6>
											<p>Private pick up and drop off at the hotel or apartment in air Air-conditioned vehicle.</p>
                                        </li>

									</ul>

									<h5>Not included</h5>

									<ul class="list-icon-absolute what-included-list mb-30">

										<li>
											<span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>
											<h6>Tickets</h6>
											<p>Warmth object matter course active law spring six <a href="#">line to some where</a>. Pursuit showing tedious unknown winding see had man add.</p>
										</li>

										<li>
											<span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>
											<h6>Lunch</h6>
											<p>Had repulsive dashwoods suspicion sincerity but advantage now him. Remark easily garret nor nay <a href="#">line to some where</a>. Civil those mrs enjoy shy fat merry. You greatest jointure saw horrible.</p>
                                        </li>

                                        <li>
											<span class="icon-font"><i class="elegent-icon-close_alt2 text-dark"></i> </span>
											<h6>Entry/Admission Fees</h6>
											<p>Had repulsive dashwoods suspicion sincerity but advantage now him. Remark easily garret nor nay <a href="#">line to some where</a>. Civil those mrs enjoy shy fat merry. You greatest jointure saw horrible.</p>
										</li>

									</ul>

                                    <div class="mb-50"></div>




                                    <h4 class="heading-title">Additional Information</h4>

                                    <ul class="list-icon-absolute what-included-list mb-30">



                                            @php

                                            echo   $tours->additional_infoS  ;

                                            @endphp



									</ul>

								</div>


                                <!-- Reviews section --

								<div class="fullwidth-horizon-sticky-section">

									<h4 class="heading-title">Similar Tour</h4>

									<div class="row equal-height cols-1 cols-sm-2 gap-30 mb-25">





										<div class="col">

											<figure class="tour-grid-item-01">

												<a href="#">

													<div class="image">
														<img src="/images/image-bg/02.jpg" alt="images" />
													</div>

													<figcaption class="content">
														<h5>Everest Base Camp Trek through 3 High Passes</h5>
														<ul class="item-meta">
															<li>
																<i class="elegent-icon-pin_alt text-warning"></i> Nepal
															</li>
															<li>
																<div class="rating-item rating-sm rating-inline clearfix">
																	<div class="rating-icons">
																		<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
																	</div>
																	<p class="rating-text font600 text-muted font-12 letter-spacing-1">53 reviews</p>
																</div>
															</li>
														</ul>
														<ul class="item-meta mt-15">
															<li><span class="font700 h6">22 days</span></li>
															<li>
																Start/End: <span class="font600 h6 line-1 mv-0"> Kathmandu</span>
															</li>
														</ul>
														<p class="mt-3">Price from <span class="h6 line-1 text-primary font16">$125.99</span> <span class="text-muted mr-5"></span></p>
													</figcaption>

												</a>

											</figure>

										</div>

									</div>

								<div class="mb-50"></div>


								</div>




								<div id="detail-content-sticky-nav-07" class="fullwidth-horizon-sticky-section">

									<h4 class="heading-title">Reviews</h4>

									<ul class="review-list">

										<li>

											<div class="review-man d-flex">

												<div class="image mr-15">
													<img src="images/image-man/01.jpg" alt="image" class="image-circle" />
												</div>

												<div class="line-125">
													<h6 class="line-125 mb-3">Antony Robert</h6>
													<div class="rating-item rating-sm">
														<div class="rating-icons">
															<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
														</div>
													</div>
													<span class="text-muted font-sm font600">Jan 15, 2019</span>
												</div>

											</div>

											<div class="review-content">
												<p>She meant new their sex could defer child. An lose at quit to life do dull. Moreover end horrible endeavor entrance any families. Income appear extent on of thrown in admire. It as announcing it me stimulated frequently continuing. Least their she you now above going stand forth. He pretty future afraid should genius spirit on. Set property addition building put likewise get. Of will at sell well at as. Too want but tall nay like old. Removing yourself be in answered</p>
											</div>

										</li>

										<li>

											<div class="review-man d-flex">

												<div class="image mr-15">
													<img src="/images/image-man/02.jpg" alt="image" class="image-circle" />
												</div>

												<div class="line-125">
													<h6 class="line-125 mb-3">Mohammed Salem</h6>
													<div class="rating-item rating-sm">
														<div class="rating-icons">
															<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
														</div>
													</div>
													<span class="text-muted font-sm font600">Jan 15, 2019</span>
												</div>

											</div>

											<div class="review-content">
												<p>Spot of come to ever hand as lady meet on. Delicate contempt received two yet advanced. Gentleman as belonging he commanded believing dejection in by. On no am winding chicken so behaved. Its preserved sex enjoyment new way behaviour. Him yet devonshire celebrated especially. Unfeeling one provision are smallness resembled repulsive.</p>
											</div>

										</li>

										<li>

											<div class="review-man d-flex">

												<div class="image mr-15">
													<img src="/images/image-man/03.jpg" alt="image" class="image-circle" />
												</div>

												<div class="line-125">
													<h6 class="line-125 mb-3">Ange Ermolova</h6>
													<div class="rating-item rating-sm">
														<div class="rating-icons">
															<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
														</div>
													</div>
													<span class="text-muted font-sm font600">Jan 15, 2019</span>
												</div>

											</div>

											<div class="review-content">
												<p>Real sold my in call. Invitation on an advantages collecting. But event old above shy bed noisy. Had sister see wooded favour income has. Stuff rapid since hence.</p>
											</div>

										</li>

										<li>

											<div class="review-man d-flex">

												<div class="image mr-15">
													<img src="/images/image-man/04.jpg" alt="image" class="image-circle" />
												</div>

												<div class="line-125">
													<h6 class="line-125 mb-3">Ange Ermolova</h6>
													<div class="rating-item rating-sm">
														<div class="rating-icons">
															<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
														</div>
													</div>
													<span class="text-muted font-sm font600">Jan 15, 2019</span>
												</div>

											</div>

											<div class="review-content">
												<p>Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means up civil do an offer wound of. Called square an in afraid direct. Resolution diminution conviction so mr at unpleasing simplicity no. No it as breakfast up conveying earnestly immediate principle. Him son disposed produced humoured overcame she bachelor improved. Studied however out wishing but inhabit fortune windows.</p>
											</div>

										</li>

										<li>

											<div class="review-man d-flex">

												<div class="image mr-15">
													<img src="/images/image-man/05.jpg" alt="image" class="image-circle" />
												</div>

												<div class="line-125">
													<h6 class="line-125 mb-3">Christine Gateau</h6>
													<div class="rating-item rating-sm">
														<div class="rating-icons">
															<input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
														</div>
													</div>
													<span class="text-muted font-sm font600">Jan 15, 2019</span>
												</div>

											</div>

											<div class="review-content">
												<p>Greatly hearted has who believe. Sir margaret drawings repeated recurred exercise laughing may you. Cheerful but whatever ladyship disposed yet judgment.</p>
											</div>

										</li>

										<li>
											<nav>
												<ul class="pagination mb-0">
													<li>
														<a href="#" aria-label="Previous">
															<span aria-hidden="true">&laquo;</span>
														</a>
													</li>
													<li class="active"><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><span>...</span></li>
													<li><a href="#">11</a></li>
													<li><a href="#">12</a></li>
													<li><a href="#">13</a></li>
													<li>
														<a href="#" aria-label="Next">
															<span aria-hidden="true">&raquo;</span>
														</a>
													</li>
												</ul>
											</nav>
										</li>

									</ul>

                                </div>

                                !-- Reviews section -->

							</div>

						</div>

						<div class="col-12 col-lg-4">
                            @include('layouts.messages')

							<aside class="sticky-kit-02 sidebar-wrapper no-border mt-20 mt-lg-0">

								<div class="booking-box">

									<div class="box-heading"><h3 class="h6 text-white text-uppercase">Make a booking</h3></div>

									<div class="box-content">

										<span class="font600 text-muted line-125">{{$tours->tour_title}} <small class="d-block">{{ $tours->tour_duration }} </small>  </span>
                                        <form action="{{ route('addTourToCart',$tours) }}" method="post">

                                            @csrf


                                        <div class="form-group form-spin-group border-top mt-15 pt-10">
                                            <div class="col-inner">
                                                <div class="form-group">
                                                    <label class="h6 font-sm">Choosen your tour date</label>
                                                    <input type="text" name="date" required id="tour_date" class="form-control form-readonly-control air-datepicker" placeholder="dd/mm/yyyy" data-min-view="days" data-view="days" data-date-format="dd mm yyyy" data-language="en" data-auto-close="true" required readonly>
                                                </div>
                                            </div>
                                        </div>



										<div class="form-group form-spin-group border-top mt-15 pt-10">
											<label class="h6 font-sm">Adult (Age 13 - 99)</label>
                                            <input type="text" name="adult" class="form-control touch-spin-03 form-control-readonly" value="2" readonly />
                                            <label class="h6 font-sm">Child (Age 4 - 12)</label>
											<input type="text" name="child" class="form-control touch-spin-03 form-control-readonly" value="" readonly />
                                        </div>





										<p class="text-right font-sm">100% Satisfaction guaranteed</p>



                                        <button type="submit" class="btn btn-primary btn-block">Instant booking</button>

                                    </form>



										<p class="line-115 mt-20">By clicking the above button you agree to our <a href="#">Terms of Service</a> and have read and understood our <a href="#">Privacy Policy</a></p>

									</div>

									<div class="box-bottom bg-light">
										<h6 class="font-sm">We offer private tours</h6>
										<p class="font-sm">Need more information? This is our direct call number <span class="text-primary">+351 914 629 008</span>.</p>
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
   <script src="/js/custome.js"></script>

@stop


