<!-- Header for Mobile -->
<header id="header" class="header mobile">
 

  <div class="header-nav">
    <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
      <div class="container">
        <nav id="menuzord-right" class="menuzord blue no-bg"><a class="menuzord-brand pull-left flip mb-15" href="/"><img src="images/logo.png" alt=""></a>
          <ul class="menuzord-menu">
            <li class="active"><a href="/">Home</a>
            </li>
            <li><a href="/about-us">About Us</a>
            </li>
            {{-- <li><a href="#">About</a>
              <ul class="dropdown">
                <li><a href="/about-us">About Us</a>
                </li>
                <li><a href="/our-team">Our Team</a>
                </li>
              </ul>
            </li> --}}
            <!-- <li><a href="/services">Services</a>
            </li> -->
            <li><a href="/our-products"> Products </a>
            </li>
            <li><a href="/contact-us">Contact Us</a>
            </li>
            <li><a href="/faq"> FAQ </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>





























<header id="header" class="header modern-header modern-header-theme-colored2 desktop">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="widget text-white">
              <i class="fa fa-clock-o text-theme-colored_2"></i> Opening Hours:  Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed
            </div>
          </div>
          <div class="col-md-5">
            <div class="widget pull-right flip sm-pull-none">
              <ul class="list-inline text-right flip sm-text-center">
                <li>
                  <a class="text-white" href="/faq">FAQ</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="/contact-us">Help Desk</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="/contact-us">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle p-0 bg-lightest xs-text-center pb-30">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <a class="menuzord-brand pull-left flip sm-pull-center mb-15" href="/"><img src="/images/logo.png" alt=""></a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="fa fa-envelope text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">Mail Us Today</a>
                  <h5 class="font-13 text-black m-0"> {{config("app.email") }} </h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="fa fa-phone-square text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">Call us for more details</a>
                  <h5 class="font-13 text-black m-0"> {{config("app.telephone_1") }}</h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="fa fa-building-o text-theme-colored font-32 mt-5 mr-sm-0 sm-display-block pull-left flip sm-pull-none"></i>
                  <a href="#" class="font-12 text-gray text-uppercase">Company Location</a>
                  <h5 class="font-13 text-black m-0"> {{ config("app.location") }}</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-2 sm-text-center">
            <div class="widget mt-10 mb-10 m-0">
              <ul class="styled-icons icon-dark icon-sm mt-10">
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="#" data-bg-color="#00A85A"><i class="fa fa-facebook"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s" data-wow-offset="10"><a href="#" data-bg-color="#00A85A"><i class="fa fa-twitter"></i></a></li>
                <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s" data-wow-offset="10"><a href="#" data-bg-color="#00A85A"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed">
        <div class="container">
          <nav id="menuzord" class="menuzord green">
            <ul class="menuzord-menu">
              <li class="active"><a href="/">Home</a>
              </li>
              <li><a href="/about-us">About Us</a>
              </li>
              {{-- <li><a href="#">About</a>
                <ul class="dropdown">
                  <li><a href="/about-us">About Us</a>
                  </li>
                  <li><a href="/our-team">Our Team</a>
                  </li>
                </ul>
              </li> --}}
              <!-- <li><a href="/services">Services</a>
              </li> -->
              <li><a href="/our-products"> Products </a>
              </li>
              <li><a href="/contact-us">Contact Us</a>
              </li>
              <li><a href="/faq"> FAQ </a>
              </li>
              <li class="active pull-right"><a href="#" class="font-20 line-height-1"><i class="pe-7s-call mr-10 font-28"></i> {{ config("app.telephone_2") }}</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>


  <style>
    @media (min-width: 0px) and (max-width: 500px){
      .mobile{
        display: block;
      }

      .desktop{
        display: none;
      }

      
    }



    @media (min-width: 501px) and (max-width: 5000px){
      .mobile{
        display: none;
      }

      .desktop{
        display: block;
      }

      
    }


  </style>