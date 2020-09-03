@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }} | about us

@endsection

@section("main_content")

    <!-- Section: inner-header -->
    @includeIf("layouts.breadcrumb", ["title" =>"About Us" , "subtitle" => "About Us"])

    <!-- Section About -->
   @includeIf('layouts.about')
   

    <!-- Section: about -->
    {{-- <section class="">
      <div class="container pb-0">
        <div class="row">
          <div class="col-md-8">
            {{-- <h2 class="text-theme-colored mt-30">Welcome To <span class="text-theme-colored2">Sano Foods</span></h2> --}}
           {{-- <h2 class="text-theme-colored mb-0">Our Team</h2>
          </div>
        </div>
      </div>
    </section> --}} --}}

    <!-- Section: Team -->
{{-- <section id="team">
  <div class="container">
    <div class="row mtli-row-clearfix">
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-silver-light pt-10 pb-10">
            <h4 class="text-uppercase font-weight-600 m-5">Dr. Linda Feldman</h4>
            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Root Canals Dentist</h6>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-silver-light pt-10 pb-10">
            <h4 class="text-uppercase font-weight-600 m-5">Dr. Nicholas Fleming</h4>
            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Cosmetic Dental Surgeon</h6>  
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-silver-light pt-10 pb-10">
            <h4 class="text-uppercase font-weight-600 m-5">Dr. Jessica Tailor</h4>
            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Implant Surgeon </h6>    
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
        <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
          <div class="team-thumb">
            <img class="img-fullwidth" alt="" src="http://placehold.it/275x370">
            <div class="team-overlay"></div>
          </div>
          <div class="team-details bg-silver-light pt-10 pb-10">
            <h4 class="text-uppercase font-weight-600 m-5">Dr. Linda Feldman</h4>
            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Root Canals Dentist</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

    <!-- Section: Services -->
    {{-- <section class="bg-silver-light">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase mt-0 line-height-1">Products</h2>
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
    </section> --}}

    <!-- Divider: Clients -->
    {{-- <section class="clients bg-theme-colored">
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
    </section> --}}
@endsection