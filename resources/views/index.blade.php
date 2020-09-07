@extends('layouts.site')

@section('content')




		<!-- start Main Wrapper -->
		<div class="main-wrapper scrollspy-container">

			<div class="hero-banner hero-banner-01 overlay-light opacity-2 overlay-relative overlay-gradient gradient-white alt-option-03" style="background-image:url('images/image-bg/01.jpg'); background-position: top center;">

				<div class="overlay-holder bottom"></div>

				<div class="hero-inner">

					<div class="container">
						<h1>Go <span class="font200">tour <span class="block">with <span class="font700">Kitzel</span> </span></span></h1>
						<p class="font-lg spacing-1">Visit Lisbon, Fatima, Arrábida, Nazare or beyond!</p>

						<div class="search-form-main">
                            {!! Form::open(['action' => 'Admin\CreateTourController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}

								<div class="from-inner">

									<div class="row shrink-auto-sm gap-1">

										<div class="col-12 col-auto">
											<div class="col-inner">
												<div class="row cols-1 cols-sm-3 gap-1">

                                                    <div class="col">
                                                        <div class="col-inner">
                                                            <div class="form-group">
                                                                <label>Tour Type</label>
                                                                <select class="form-control" name="category_id" id="category" title="Type of tour you are creating" >
                                                                    @forelse ($categories as $category)
                                                                         <option value="{{ $category->id }}" >{{ $category->name }} </option>
                                                                    @empty
                                                                        <option value="null" disabled class="text text-dager" >No Category Created</option>
                                                                    @endforelse


                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


													<div class="col">
														<div class="col-inner">
															<div class="form-group">
                                                                <label>Destination</label>
                                                                <input type="country" id="country" class="form-control"  placeholder="Portugal" />
                                                             </div>
														</div>
													</div>

													<div class="col">
														<div class="col-inner">
															<div class="form-group">
																<label>When</label>
																<input type="text" class="form-control form-readonly-control air-datepicker" placeholder="Pick a month" data-min-view="months" data-view="months" data-date-format="MM yyyy" data-language="en" data-auto-close="true" readonly>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>

										<div class="col-12 col-shrink">
											<div class="col-inner">
												<a href="#" class="btn btn-primary btn-block"><i class="ion-android-search"></i></a>
											</div>
										</div>

									</div>
								</div>
                            {!! Form::close() !!}
						</div>

					</div>

				</div>

            </div>

			<section class="pb-0">

				<div class="container">

					<div class="row cols-1 cols-lg-3 gap-20 gap-lg-40">

						<div class="col">
							<div class="featured-icon-horizontal-01 clearfix">
								<div class="icon-font">
                                    <i class="fa fa-gift text-primary" aria-hidden="true"></i>
								</div>
								<div class="content">
									<h6>Amazing Deals</h6>
									<p class="text-muted">Experience portugal at affordable prices but still maximize the adventures.   </p>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="featured-icon-horizontal-01 clearfix">
								<div class="icon-font">
                                    <i class="fa fa-map text-primary" aria-hidden="true"></i>
								</div>
								<div class="content">
									<h6>Prime Loctions</h6>
									<p class="text-muted">Our tours are planned with you and your needs in mind to ensure maximum enjoyment.</p>
								</div>
							</div>
						</div>

						<div class="col">
							<div class="featured-icon-horizontal-01 clearfix">
								<div class="icon-font">
                                    <i class="fa fa-male text-primary" aria-hidden="true"></i>
								</div>
								<div class="content">
									<h6>Professional Guides</h6>
									<p class="text-muted">Our guides are experienced, friendly and always aim to make your trip one to remember.</p>
								</div>
							</div>
						</div>

                    </div>



                    <div class="clear mb-100"></div>

					<div class="section-title">
						<h2><span><span>Top</span> Destinations</span></h2>
					</div>

					<div class="slick-carousel-wrapper gap-5">

						<div class="slick-carousel-inner">

							<div class="slick-top-destination">

								<div class="slick-item">
									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/lisbon.jpg"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Lisbon</h5>
											</figcaption>
										</a>
									</figure>
								</div>

								<div class="slick-item">

									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/Coimbra.jpg"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Coimbra</h5>
											</figcaption>
										</a>
									</figure>

								</div>

								<div class="slick-item">

									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/Fatima.jpg"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Fatima</h5>
											</figcaption>
										</a>
									</figure>

								</div>

								<div class="slick-item">

									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/Evora.jpg"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Evora</h5>
											</figcaption>
										</a>
									</figure>

								</div>

								<div class="slick-item">

									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/Arrabida.jpg"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Arrabida</h5>
											</figcaption>
										</a>
									</figure>

								</div>

								<div class="slick-item">

									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/Tomar.png"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Tomar</h5>
											</figcaption>
										</a>
									</figure>

								</div>

								<div class="slick-item">

									<figure class="destination-grid-item-01">
										<a href="#">
											<div class="image">
												<img src="images/image-destination/Porto.jpg"alt="image"/>
											</div>
											<figcaption class="content">
												<h5>Porto</h5>
											</figcaption>
										</a>
									</figure>

								</div>



							</div>

						</div>

					</div>




					<div class="clear mb-100"></div>

					<div class="section-title">
						<h2><span><span>Amazing</span> Tour Packages</span></h2>
                    </div>




                                <div class="row equal-height cols-1 cols-sm-2 cols-lg-3 gap-20 mb-30">




									@if(count($tours) > 0)
									@foreach($tours as $tour)



                                    <div class="col">

                                        <figure class="tour-grid-item-01">

                                            <a href="/tours/{{$tour->id}}">

                                                <div class="image">

													<img src="/storage/uploads/tours/{{$tour->featured}}" alt="{{ $tour->tour_title }}" />

                                                </div>



                                                <figcaption class="content">

                                                    <h5>{{ $tour->tour_title }}</h5>
                                                    <ul class="item-meta">
                                                        <li>
                                                            <i class="elegent-icon-pin_alt text-warning"></i> {{ $tour->tour_location }}
                                                        </li>
                                                        <li>
                                                            <div class="rating-item rating-sm rating-inline clearfix">
                                                                <div class="rating-icons">
                                                                    <input type="hidden" class="rating" data-filled="rating-icon ri-star rating-rated" data-empty="rating-icon ri-star-empty" data-fractions="2" data-readonly value="4.5"/>
                                                                </div>
                                                                <p class="rating-text font600 text-muted font-12 letter-spacing-1">26 reviews</p>
                                                            </div>
                                                        </li>
                                                    </ul>




                                                    <ul class="item-meta mt-15">
                                                        <li><span class="font700 h6">{{ $tour->tour_duration }}</span></li>
                                                        <li>
                                                            <p class="mt-3">Price from <span class="h6 line-1 text-primary font16">  <del> € {{ $tour->price }}  </del>  <span class="text text-success p3"  >  € {{ $tour->newPriceAfterDiscount($tour->price,$tour->discount) }}</span>  </span> <span class="text-muted mr-5"></span></p>
                                                        </li>
                                                    </ul>
                                                </figcaption>



                                            </a>

                                        </figure>

                                    </div>



                                    @endforeach








                                   @else

                                       <p>No Posts Found </p>

                                   @endif




                                </div>



                </div>







			</section>

			<div class="bg-white-gradient-top-bottom pt-0 mt-40">

				<div class="bg-gradient-top"></div>
				<div class="bg-gradient-bottom"></div>

				<div class="bg-image pv-100 overlay-relative" style="background-image:url('images/image-bg/44.jpg');">

					<div class="overlay-holder overlay-white opacity-8"></div>

					<div class="container">

						<div class="testimonial-grid-slick-carousel testimonial-grid-wrapper">

							<div class="testimonial-grid-arrow">
								<ul>
									<li class="testimonial-grid-prev"><button><span>previuos</span></button></li>
									<li class="testimonial-grid-next"><button><span>next</span></button></li>
								</ul>
							</div>

							<div class="slick-carousel-wrapper gap-50">

								<div class="slick-carousel-outer">

									<div class="slick-carousel-inner">

										<div class="slick-testimonial-grid-arrows">

											<div class="slick-item">

												<div class="testimonial-grid-01">

													<div class="content">

														<p class="saying">My wife and I did two tours with Joao and both were fantastic. He is very knowledgeable and made it very special for us. We will absolutely use him again in the future. Great memories.</p>

													</div>

													<div class="man clearfix">

														<div class="image">
															<img src="images/image-man/01.jpg" alt="images" class="img-circle" />
														</div>

														<div class="texting">
															<h5>Jim D</h5>
															<p class="text-muted testimonial-cite">Tour on Jun 2019</p>
														</div>

													</div>

												</div>

											</div>

											<div class="slick-item">

												<div class="testimonial-grid-01">

													<div class="content">

														<p class="saying">Dear John. Thank you very much for showing me and me husband the beautiful city of Lissabon with all is amazing secret places and also your passion as local tour guide!!</p>

													</div>

													<div class="man clearfix">

														<div class="image">
															<img src="images/image-man/02.jpg" alt="images" class="img-circle" />
														</div>

														<div class="texting">
															<h5>jennadour</h5>
															<p class="text-muted testimonial-cite">Travel on December 2019</p>
														</div>

													</div>

												</div>


											</div>

											<div class="slick-item">

												<div class="testimonial-grid-01">

													<div class="content">

														<p class="saying">Highly recommend José. He is very pleasant and knowledgeable. He got us all around beautiful city of sintra and Lisbon. And surrounding areas. Would use him again when I go back.</p>

													</div>

													<div class="man clearfix">

														<div class="image">
															<img src="images/image-man/03.jpg" alt="images" class="img-circle" />
														</div>

														<div class="texting">
															<h5>Suttira Ketkaew</h5>
															<p class="text-muted testimonial-cite">Travel on December 2019</p>
														</div>

													</div>

												</div>

											</div>

											<div class="slick-item">

												<div class="testimonial-grid-01">

													<div class="content">

														<p class="saying">My wife and I took Joao's Sesimbra Arrabida Setubal tour and very much enjoyed it. He is an excellent tourguide. Would recommend it</p>

													</div>

													<div class="man clearfix">

														<div class="image">
															<img src="images/image-man/02.jpg" alt="images" class="img-circle" />
														</div>

														<div class="texting">
															<h5>Alice M</h5>
															<p class="text-muted testimonial-cite">Travel on November 2019</p>
														</div>

													</div>

												</div>


											</div>

											<div class="slick-item">

												<div class="testimonial-grid-01">

													<div class="content">

														<p class="saying">John was a wonderful tour guide as he was very knowledgeable and passionate about the area we toured.</p>

													</div>

													<div class="man clearfix">

														<div class="image">
															<img src="images/image-man/03.jpg" alt="images" class="img-circle" />
														</div>

														<div class="texting">
															<h5>mboydpt</h5>
															<p class="text-muted testimonial-cite">Travel on September 2019</p>
														</div>

													</div>

												</div>

											</div>

											<div class="slick-item">

												<div class="testimonial-grid-01">

													<div class="content">

														<p class="saying"> Thank you for showing me and me husband the beautiful city of Lissabon with all is amazing secret places and also your passion as local tour guide!! Thanks</p>

													</div>

													<div class="man clearfix">

														<div class="image">
															<img src="images/image-man/01.jpg" alt="images" class="img-circle" />
														</div>

														<div class="texting">
															<h5>jennadour </h5>
															<p class="text-muted testimonial-cite">Travel on December 2019</p>
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

				<div class="overlay-relative overlay-gradient gradient-white set-height-01">
					<div class="overlay-holder bottom"></div>
				</div>

			</div>



		</div>
		<!-- end Main Wrapper -->








@endsection

