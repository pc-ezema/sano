@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }} | contact us

@endsection

@section("main_content")

<!-- Section: inner-header -->
  @includeIf("layouts.breadcrumb", ["title" => "Contact Us", "subtitle" => "Contact Us"])

<!-- Section: Have Any Question -->
<section class="divider">
  <div class="container pt-60 pb-60">
    <div class="section-title mb-60">
      <div class="row">
        <div class="col-md-12">
          <div class="esc-heading small-border text-center">
            <h3>Have any Questions?</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
            <h4>Call Us</h4>
            <h6 class="text-gray">{{ config('app.telephone_1') }}</h6>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
            <h4>Address</h4>
            <h6 class="text-gray">{{ config('app.location') }}</h6>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
            <h4>Email</h4>
            <h6 class="text-gray">{{ config('app.email') }}</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Contact -->
<section data-bg-img="images/pattern/p4.png"> 
  <div class="container">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Contact</span> Us</h2>
        </div>
      </div>
    </div>
    <div class="section-content">          
      <div class="row">
        <div class="col-md-12">
        @includeIf('layouts.error_template')
          <!-- Contact Form -->
          <form class="contact-form-transparent" action="/contact-us" method="post">
          {{ csrf_field() }}
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Name <small>*</small></label>
                  <input name="fullname" class="form-control" type="text" placeholder="Enter Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email <small>*</small></label>
                  <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Subject <small>*</small></label>
                  <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>

            </div>
            <div class="form-group">
              <label>Message</label>
              <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-dark btn-theme-colored btn-flat btn-block" data-loading-text="Please wait...">Send your message</button>
            </div>
          </form>
          
        

        </div>
      </div>
    </div>
  </div>
</section>

@endsection