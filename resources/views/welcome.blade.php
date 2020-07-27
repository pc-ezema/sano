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
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-blood8 text-theme-colored"></i> </a>
                    <h3 class="text-white">Free Consultation</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-medical45 text-theme-colored"></i> </a>
                    <h3 class="text-white">Quality Brackets</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-pill text-theme-colored"></i> </a>
                    <h3 class="text-white">Latest Technology</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored2">
                <div class="text-center pt-30 pb-sm-30">
                  <div class="icon-box text-center">
                    <a class="icon bg-silver-light icon-circled" href="#"> <i class="flaticon-medical-heart254  text-theme-colored"></i> </a>
                    <h3 class="text-white">Excellent Services</h3>
                    <p class="text-white">Eleifend lobortis bibendum volutpat est senectus duis convallis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: about -->
    <section class="">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-8">
            <h4 class="text-uppercase text-theme-colored2 mt-sm-10">Welcome to dental pro</h4>
            <h2 class="mt-0">A dentist, also known as a dental surgeon, The dentist's supporting team aids in providing oral health services.</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi molestiae autem fugit consectetur dolor ullam illo ipsa numquam, quod iusto enim ipsum amet iusto amet consec Lorem ipsum dolor sit amet</p>
            <h3 class="text-theme-colored mb-0">Dr. Corvin Adams</h3>
            <p><span>Doctor of Dental Surgery (DDS)</span></p>

            <p class="mt-20"><img src="images/signature.png" alt=""></p>
          </div>
          <div class="col-md-4">
            <img src="http://placehold.it/340x464" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section id="services">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Our Services</h2>
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
                <h3 class="mt-20">Root Canal</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-brush18 text-theme-colored font-38"></i>
                <h3 class="mt-20">Teeth Whitening</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-hospital17 text-theme-colored font-38"></i>
                <h3 class="mt-20">Wisdom Teeth</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-dentist text-theme-colored font-38"></i>
                <h3 class="mt-20">Crowns Bridges</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-30 p-10">
                <i class="flaticon-medical-hospital35 text-theme-colored font-38"></i>
                <h3 class="mt-20">Cosmetic Dentis</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="text-center mb-sm-30 p-10">
                <i class="flaticon-medical-teeth2 text-theme-colored font-38"></i>
                <h3 class="mt-20">Dental Implants</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi qui inventore, cumque nulla rerum consem!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-8" data-bg-img="http://placehold.it/1920x873" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1754" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Happy Patients</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Our Services</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="248" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Our Doctors</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-white font-42 font-weight-500">0</h2>
              <h4 class="text-white text-uppercase font-weight-600">Service Points</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Depertment -->
    <section id="depertment" class="">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Our Depertment</h2>
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
                    <img class="img-fullwidth" src="http://placehold.it/370x270" alt="project">
                  </div>
                  <div class="info-box">
                    <div class="info-title bg-theme-colored-transparent-9">
                      <h3 class="title text-white mt-0">Title place here</h3>
                    </div>
                    <div class="info-content text-white bg-theme-colored-transparent-9">
                      <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a class="btn btn-theme-colored2" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-hover-effect effect-siberia mb-30">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/370x270" alt="project">
                  </div>
                  <div class="info-box">
                    <div class="info-title bg-theme-colored-transparent-9">
                      <h3 class="title text-white mt-0">Title place here</h3>
                    </div>
                    <div class="info-content text-white bg-theme-colored-transparent-9">
                      <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a class="btn btn-theme-colored2" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-hover-effect effect-siberia mb-30">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/370x270" alt="project">
                  </div>
                  <div class="info-box">
                    <div class="info-title bg-theme-colored-transparent-9">
                      <h3 class="title text-white mt-0">Title place here</h3>
                    </div>
                    <div class="info-content text-white bg-theme-colored-transparent-9">
                      <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a class="btn btn-theme-colored2" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-hover-effect effect-siberia mb-30">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/370x270" alt="project">
                  </div>
                  <div class="info-box">
                    <div class="info-title bg-theme-colored-transparent-9">
                      <h3 class="title text-white mt-0">Title place here</h3>
                    </div>
                    <div class="info-content text-white bg-theme-colored-transparent-9">
                      <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a class="btn btn-theme-colored2" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-hover-effect effect-siberia mb-30">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/370x270" alt="project">
                  </div>
                  <div class="info-box">
                    <div class="info-title bg-theme-colored-transparent-9">
                      <h3 class="title text-white mt-0">Title place here</h3>
                    </div>
                    <div class="info-content text-white bg-theme-colored-transparent-9">
                      <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a class="btn btn-theme-colored2" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="box-hover-effect effect-siberia mb-30">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/370x270" alt="project">
                  </div>
                  <div class="info-box">
                    <div class="info-title bg-theme-colored-transparent-9">
                      <h3 class="title text-white mt-0">Title place here</h3>
                    </div>
                    <div class="info-content text-white bg-theme-colored-transparent-9">
                      <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> Title place here</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a class="btn btn-theme-colored2" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- start Doctors Section:-->
    <section id="doctors" class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class=" mt-0 line-height-1">Our <span class="text-theme-colored">Dentist</span></h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-4col">
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-white pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5">Dr. Linda Feldman</h4>
                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Root Canals Dentist</h6>
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-white pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5">Dr. Jessica Tailor</h4>
                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Implant Surgeon </h6>    
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-white pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5">Dr. Nicholas Fleming</h4>
                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Cosmetic Dental Surgeon</h6>  
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                  <div class="team-thumb">
                    <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
                    <div class="team-overlay"></div>
                  </div>
                  <div class="team-details bg-white pt-10 pb-10">
                    <h4 class="text-uppercase font-weight-600 m-5">Dr. Brian Adam</h4>
                    <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Restorative Dentist</h6>  
                    <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Call To Action -->
    <section  class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x873">
      <div class="container">
        <div class="call-to-action">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h2 class="text-white"><i class="pe-7s-call text-white"></i><a class="text-white" href="#"> (+01) &ndash; 234 567 890</a></h2>
              <h2 class="text-white">Please free to contact us for emergency case.</h2>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit rem autem voluptatem obcaecati lienum phaedrum torquatos nec eu, vis detraxit periculis ex.</p>
              <a href="#" class="btn btn-default btn-theme-colored2 mt-20">Contact With Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Pricing -->
    <section id="pricing" class="bg-silver-light">
      <div class="container pb-50">
        <div class="section-title text-center mb-60">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0">Pricing</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon.png" alt="">
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content mt-20">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-hammers5 text-theme-colored"></i>
                  </div>
                  <h3 class="package-type font-24 text-uppercase">Dental Whitening</h3>
                  <h1 class="price text-theme-colored mb-10 font-36">$33</h1>
                  <h4 class="discount">First Time</h4>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Rem autem voluptatem obcaecati! </p>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Request an Appointment</a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon bg-theme-colored">
                    <i class="flaticon-medical-human3 text-white"></i>
                  </div>
                  <h3 class="package-type font-24 text-uppercase">Root Treatment</h3>
                  <h1 class="price text-theme-colored mb-10 font-36">$15</h1>
                  <h4 class="discount">First Time</h4>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Rem autem voluptatem obcaecati! </p>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Request an Appointment</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1">
              <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                <div class="p-40 bg-white">
                  <div class="pricing-icon">
                    <i class="flaticon-medical-scalpel3 text-theme-colored"></i>
                  </div>
                  <h3 class="package-type font-24 text-uppercase">Dental Implant</h3>
                  <h1 class="price text-theme-colored mb-10 font-36">$29</h1>
                  <h4 class="discount">First Time</h4>
                  <p>Lorem ipsum dolor sit amet conse ctetur adipi sicing elit. Rem autem voluptatem obcaecati! </p>
                  <a class="btn btn-colored btn-theme-colored text-uppercase mt-30" href="#">Request an Appointment</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<!--start gallary Section-->
		<section class="">
			<div class="container">
				<div class="section-title text-center mt-0">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="mt-0 line-height-1">Our <span class="text-theme-colored">Gallery</span></h2>
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
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/1.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/2.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/3.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/4.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item design photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/5.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/6.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/7.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item photography">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/8.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Portfolio Item End -->
								<!-- Portfolio Item Start -->
								<div class="gallery-item branding">
									<div class="thumb">
										<img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
										<div class="overlay-shade"></div>
										<div class="text-holder">
											<div class="title text-center">Sample Title</div>
										</div>
										<div class="icons-holder">
											<div class="icons-holder-inner">
												<div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
													<a href="images/gallery/full/9.jpg" data-lightbox-gallery="gallery" title="Your Title Here"><i class="fa fa-picture-o"></i></a>
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
		</section>

		<!--start testimonial Section-->
    <section  class="divider parallax layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x873">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase text-white mt-0 line-height-1">Testimonial</h2>
              <div class="title-icon">
                <img class="mb-10" src="images/title-icon-white.png" alt="">
              </div>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-3col" data-dots="true">
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-theme-colored2">Gavin Smith</h5>
                        <h6 class="title text-white mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-theme-colored2">Jonathan Smith</h5>
                        <h6 class="title text-white mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/95x95"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-theme-colored2">Mary James</h5>
                        <h6 class="title text-white mt-0">Happy Patient</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial style1">
                    <div class="comment bg-theme-colored2">
                      <p class="text-white">Lorem ipsum dolor sit ametconse ctetur adipisicing elitvolup tatem error sit qui dolorem facilis.</p>
                    </div>
                    <div class="content mt-20">
                      <div class="thumb pull-right flip"> <img class="img-circle" alt="" src="http://placehold.it/100x100"> </div>
                      <div class="text-right flip pull-right flip mr-20 mt-10">
                        <h5 class="author text-theme-colored2">Lucy brown</h5>
                        <h6 class="title text-white mt-0">Happy Patient</h6>
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

    <!-- Section: Blog -->
    <section id="blog">
      <div class="container pb-50">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">Recent  <span class="text-theme-colored"> News</span></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-3col owl-nav-top mb-sm-0" data-nav="true">
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="item">
                <article class="post clearfix maxwidth600 mb-30 wow fadeInRight" data-wow-delay=".2s">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> 
                      <img src="http://placehold.it/350x270" alt="" class="img-responsive img-fullwidth"> 
                    </div>
                  </div>
                  <div class="bg-theme-colored2 p-5 text-center pt-10 pb-10">
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-calendar mr-5 text-white"></i>21 February</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-white"></i> 214 Comments</span>
                    <span class="mb-10 text-white mr-10 font-13"><i class="fa fa-heart-o mr-5 text-white"></i> 895 Likes</span>
                  </div>
                  <div class="entry-content bg-lighter p-20 pr-10">
                    <div class="entry-meta mt-0 no-bg no-border">
                      <div class="event-content">
                        <h3 class="entry-title text-white text-capitalize m-0"><a href="#">This is a standard post with thumbnail image</a></h3>
                      </div>
                    </div>
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis</p>
                    <div class="mt-10"> <a href="blog-single-left-sidebar.html" class="btn btn-theme-colored btn-sm">Read More</a> </div>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col text-center owl-nav-top">
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
              <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection