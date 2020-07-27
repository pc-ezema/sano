@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }} | about us

@endsection

@section("main_content")

    <!-- Section: inner-header -->
    @includeIf("layouts.breadcrumb", ["title" =>"About Us" , "subtitle" => "About Us"])

    <!-- Section About -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb hidden-xs hidden-sm">
                <img class="img-fullwidth" src="http://placehold.it/340x464" alt="project">
              </div>
            </div>
            <div class="col-md-8">
              <h2 class="text-theme-colored mt-30">Welcome To Our <span class="text-theme-colored2">DentalPro</span></h2>
              <p>We sincerely believe that visiting a dentist shouldn’t be a frightening or stressful experience! We provide an equally comfortable experience of relaxation for all our young and adult customers! Also we implement a lot of pain management and anesthesia options. Everything we do is aimed at making you feel comfortable!</p>
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box iconbox-theme-colored2 mt-20">
                    <a class="icon icon-bordered icon-circled icon-border-effect effect-circled"><i class="flaticon-medical-medical51 text-theme-colored"></i></a>
                    <div class="features-details">
                      <h3>Quality Doctors</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita porro ipsa, nulla alias consequatur repellendus deserunt iste Dolorum vero</p>
                    </div>
                    <a href="#" class="btn btn-flat btn-theme-colored2 mt-15">Read More</a>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="icon-box iconbox-theme-colored2 mt-20">
                    <a class="icon icon-bordered icon-circled icon-border-effect effect-circled"><i class="flaticon-medical-medicine14 text-theme-colored"></i></a>
                    <div class="features-details">
                      <h3>Affordable Clinic</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita porro ipsa, nulla alias consequatur repellendus deserunt iste Dolorum vero</p>
                    </div>
                    <a href="#" class="btn btn-flat btn-theme-colored2 mt-15">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Services -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Services</h2>
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
              <div class="icon-box iconbox-theme-colored2 left media p-0">
                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-teeth2 text-theme-colored"></i></a>
                <div class="media-body">
                  <h3 class="media-heading heading">Dental Implants</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box iconbox-theme-colored2 left media p-0">
                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="fa fa-medkit text-theme-colored"></i></a>
                <div class="media-body">
                  <h3 class="media-heading heading">Root Canal</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box iconbox-theme-colored2 left media p-0">
                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-brush18 text-theme-colored"></i></a>
                <div class="media-body">
                  <h3 class="media-heading heading">Teeth Whitening</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box iconbox-theme-colored2 left media p-0">
                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-medical51 text-theme-colored"></i></a>
                <div class="media-body">
                  <h3 class="media-heading heading">Wisdom Teeth</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box iconbox-theme-colored2 left media p-0">
                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-dentist text-theme-colored"></i></a>
                <div class="media-body">
                  <h3 class="media-heading heading">Crowns Bridges</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box iconbox-theme-colored2 left media p-0">
                <a href="#" class="icon icon-bordered icon-circled media-left pull-left"><i class="flaticon-medical-hospital35 text-theme-colored"></i></a>
                <div class="media-body">
                  <h3 class="media-heading heading">Cosmetic Dentis</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum consectetur sit ullam perspiciatis, deserunt.</p>
                </div>
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