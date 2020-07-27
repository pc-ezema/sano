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
            <h4 class="text-uppercase font-weight-600 m-5">Dr. Brian Adam</h4>
            <h6 class="text-theme-colored font-15 font-weight-400 mt-0">Restorative Dentist</h6>  
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
</section>

@endsection