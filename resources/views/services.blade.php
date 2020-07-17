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

    <!-- Section: Call To Action -->
    <section  class="divider parallax layer-overlay overlay-theme-colored2-9" data-bg-img="http://placehold.it/1920x873">
      <div class="container pt-20 pb-20">
        <div class="call-to-action">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h2 class="text-theme-colored"><i class="pe-7s-call text-theme-colored"></i><a class="text-theme-colored" href="#"> (+01) &ndash; 234 567 890</a></h2>
              <h2 class="text-white">Please feel free to contact us for emergency case.</h2>
              <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit rem autem voluptatem obcaecati lienum phaedrum torquatos nec eu, vis detraxit periculis ex.</p>
              <a href="#" class="btn btn-theme-colored mt-20">Contact With Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Doctors -->
    <section id="doctors">
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
                  <div class="team-details bg-silver-light pt-10 pb-10">
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
                  <div class="team-details bg-silver-light pt-10 pb-10">
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
                  <div class="team-details bg-silver-light pt-10 pb-10">
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
                  <div class="team-details bg-silver-light pt-10 pb-10">
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

@endsection