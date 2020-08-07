@extends("layouts.frontend")


@section("title")

{{ config("app.name") }} | homepage

@endsection


@section("slider")

   @includeIf("layouts.slider")

@endsection


@section("main_content")

    <!-- Section: home-box -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row equal-height-inner" data-margin-top="-150px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored_1">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-blood8 text-theme-colored"></i> </a>
                    <h3 class="text-white">OFSP Bread</h3>
                    <p class="text-white_1">A bread with abundant vitamin in every bite</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-medical45 text-theme-colored"></i> </a>
                    <h3 class="text-white">Organic Meats</h3>
                    <p class="text-white_1">Enjoy the new taste of a hot and spicy chicken</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored_1">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-pill text-theme-colored"></i> </a>
                    <h3 class="text-white">Organic Spices</h3>
                    <p class="text-white_1">Fortify your health with fresh and pure spices</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-heart254  text-theme-colored"></i> </a>
                    <h3 class="text-white">Priscus Tea</h3>
                    <p class="text-white_1">A tea with a refreshing burst to a healthy life</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
   @includeIf('layouts.about')

    <!-- Section: Services -->
    {{-- <section id="services">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Our Products</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="fa fa-medkit text-theme-colored font-38"></i>
                <h3 class="mt-20">TURMERIC SPICE</h3>
                <p>Turmeric is a bright yellow-orange spice commonly used in curries and sauces. It comes from the turmeric root. The spice has been used for its medicinal, antioxidant, and anti-inflammatory properties.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-brush18 text-theme-colored font-38"></i>
                <h3 class="mt-20"> THYME LEAVE</h3>
                <p>Thyme is an herb with dietary and medicinal uses. The flowers, leaves, and oil of thyme have been used to treat a range of symptoms and complaints. These include diarrhea, stomach ache, arthritis, and sore throat</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-hospital17 text-theme-colored font-38"></i>
                <h3 class="mt-20"> SANO OFSP BREAD </h3>
                <p>A bread made from orange fleshed sweet potato, with numerous health benefits, which is an excellent source of Vitamin A. It is very effective in decreasing diabetic complications and curing internal and external inflammations.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-dentist text-theme-colored font-38"></i>
                <h3 class="mt-20"> ORGANIC CHICKEN</h3>
                <p> Organic chicken is a frozen chicken from broilers fed organically, without the use vaccines, antibiotics and chemical growth hormones. They are free from toxins, improves immunity and reduces chances of cancer.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-hospital35 text-theme-colored font-38"></i>
                <h3 class="mt-20">PRISCUS LEMOGRASS TEA</h3>
                <p>Priscus Lemongrass tea has high Citral content which gives it more potency for detoxification, reducing blood pressure and boosting metabolism which makes digestion quicker and helps in burning more calories.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-sm-30 p-10">
                <i class="flaticon-medical-teeth2 text-theme-colored font-38"></i>
                <h3 class="mt-20">SMOKED FISH </h3>
                <p>SANO Smoked fish comes with a unique taste and flavour. it is a great source of anti- inflammatory omega 3s and a great source of protein. Our smoked fish is packed with punch of essential nutrients our bodies need to function .</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

   @includeIf('layouts.contact')

   <!-- Section: Depertment -->
   <section id="depertment" class="">
	<div class="container">
		<div class="section-title text-center">
			<div class="row">
			  <div class="col-md-8 col-md-offset-2">
				<h2 class="text-uppercase mt-0 line-height-1">Our Products</h2>
				<div class="title-icon">
				  <img class="mb-10" src="images/title-icon.png" alt="">
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
			  </div>
			</div>
		  </div>
		<div class="section-content">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="box-hover-effect effect-siberia mb-30">
						<div class="effect-wrapper">
							<div class="thumb">
								<img class="img-fullwidth" src="/images/sano-gallery/organic-chicken.jpg" alt="project">
							</div>
							<div class="info-box">
								<div class="info-title bg-theme-colored-transparent-9">
									<h3 class="title text-white mt-0">Organic Chicken</h3>
								</div>
								<div class="info-content text-white bg-theme-colored-transparent-9">
									<h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box-hover-effect effect-siberia mb-30">
						<div class="effect-wrapper">
							<div class="thumb">
								<img class="img-fullwidth" src="/images/sano-gallery/scent-leaves-powder.jpg" alt="project">
							</div>
							<div class="info-box">
								<div class="info-title bg-theme-colored-transparent-9">
									<h3 class="title text-white mt-0">Scent Leaves Powder</h3>
								</div>
								<div class="info-content text-white bg-theme-colored-transparent-9">
									<h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box-hover-effect effect-siberia mb-30">
						<div class="effect-wrapper">
							<div class="thumb">
								<img class="img-fullwidth" src="/images/sano-gallery/sweet-basil-powder.jpg" alt="project">
							</div>
							<div class="info-box">
								<div class="info-title bg-theme-colored-transparent-9">
									<h3 class="title text-white mt-0">Sweet Basil Powder</h3>
								</div>
								<div class="info-content text-white bg-theme-colored-transparent-9">
									<h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box-hover-effect effect-siberia mb-30">
						<div class="effect-wrapper">
							<div class="thumb">
								<img class="img-fullwidth" src="/images/sano-gallery/thyme-leaves.jpg" alt="project">
							</div>
							<div class="info-box">
								<div class="info-title bg-theme-colored-transparent-9">
									<h3 class="title text-white mt-0">Thyme Leaves</h3>
								</div>
								<div class="info-content text-white bg-theme-colored-transparent-9">
									<h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box-hover-effect effect-siberia mb-30">
						<div class="effect-wrapper">
							<div class="thumb">
								<img class="img-fullwidth" src="/images/sano-gallery/bread.jpg" alt="project">
							</div>
							<div class="info-box">
								<div class="info-title bg-theme-colored-transparent-9">
									<h3 class="title text-white mt-0">OFSP Bread</h3>
								</div>
								<div class="info-content text-white bg-theme-colored-transparent-9">
									<h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="box-hover-effect effect-siberia mb-30">
						<div class="effect-wrapper">
							<div class="thumb">
								<img class="img-fullwidth" src="/images/sano-gallery/cookies.jpg" alt="project">
							</div>
							<div class="info-box">
								<div class="info-title bg-theme-colored-transparent-9">
									<h3 class="title text-white mt-0">OFSP Cookies</h3>
								</div>
								<div class="info-content text-white bg-theme-colored-transparent-9">
									<h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here
									</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div>
					<nav>
						<ul class="pager dark">
						  <li class="previous"><a href="/our-products"> View More <span aria-hidden="true">&rarr;</span></a></li>
						</ul>
					  </nav>
					 </div>
				
			</div>
		</div>
	</div>
</section>


		<!--start gallary Section-->
		{{-- <section class="">
			<div class="container">
				<div class="section-title text-center mt-0">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="mt-0 line-height-1">Our <span class="text-theme-colored">Products</span></h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
						</div>
					</div>
				</div>
				<div class="section-content">
					<div class="row">
						<div class="col-md-12">
							<!-- Portfolio Filter -->
							<div class="portfolio-filter text-center">
								<a href="#" class="active" data-filter="*">All</a>
								<a href="#branding" class="" data-filter=".branding">Checkup</a>
								<a href="#design" class="" data-filter=".design">Whitening</a>
								<a href="#photography" class="" data-filter=".photography">Whitening</a>
							</div>
							<!-- End Portfolio Filter -->
							
							<!-- Portfolio Gallery Grid -->
							<div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/organic-chicken.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text">Organic Chicken</div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/organic-chicken.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding photography">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/scent-leaves-powder.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/scent-leaves-powder.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/sweet-basil-powder.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/sweet-basil-powder.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/thyme-leaves.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/thyme-leaves.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design photography">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/bread.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/bread.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/cookies.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/cookies.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/sano-thyme-leaves.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/sano-thyme-leaves.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/cupcake.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/cupcake.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="/images/sano-gallery/curry-powder.jpg" alt="project">
										<div class="img-gallery-text-holder">
											<div class="img-gallery-text"></div>
										</div>
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="/images/sano-gallery/curry-powder.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
							</div>
							<!-- End Portfolio Gallery Grid -->
						</div>
					</div>
				</div>
			</div>
		</section> --}}

  @endsection