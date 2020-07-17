@extends("layouts.frontend")

@section('title')

  {{ config("app.name") }}  | Our Team

@endsection

@section("main_content")

<!-- Section: inner-header -->
@includeIf("layouts.breadcrumb" , ["title" => "Team" , "subtitle" => "Our Team"])

<!-- Section: Team -->
<section id="team">
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
            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
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
            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
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
            <ul class="styled-icons icon-theme-colored icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
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
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
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
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
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
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
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
      <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
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