@extends("layouts.frontend")

@section("title")

 {{ config("app.name") }}   | Services

@endsection

@section("main_content")

@includeIf("layouts.breadcrumb" , ["title" => "Services" , "subtitle" => "Our Services"])

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

  @includeIf('layouts.contact')

@endsection