@extends("layouts.frontend")


@section("title")

sano | gallery

@endsection

@section("main_content")

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x873">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="title">Gallery</h2>
          <ol class="breadcrumb text-center text-black mt-10">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active text-theme-colored">Page Title</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Grid 3 -->
<section>
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <!-- Portfolio Filter -->
          <div class="portfolio-filter">
            <a href="#" class="active" data-filter="*">All</a>
            <a href="#branding" class="" data-filter=".branding">Branding</a>
            <a href="#design" class="" data-filter=".design">Design</a>
            <a href="#photography" class="" data-filter=".photography">Photography</a>
          </div>
          <!-- End Portfolio Filter -->
        
          <!-- Portfolio Gallery Grid -->
          <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb">
                <img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a data-lightbox="image" href="http://placehold.it/500x339"><i class="fa fa-plus"></i></a>
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="http://placehold.it/500x339">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->
            
            <!-- Portfolio Item Start -->
            <div class="gallery-item branding">
              <div class="thumb">
                <img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-link"></i></a>
                      <a href="#"><i class="fa fa-heart-o"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="http://placehold.it/500x339">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item design">
              <div class="thumb">
                <img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="http://placehold.it/500x339">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item photography">
              <div class="thumb">
                <img class="img-fullwidth" src="http://placehold.it/500x339" alt="project">
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
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
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item design">
              <div class="thumb">
                <div class="flexslider-wrapper">
                  <div class="flexslider">
                    <ul class="slides">
                      <li><a href="http://placehold.it/500x339" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/500x339" alt=""></a></li>
                      <li><a href="http://placehold.it/500x339" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/500x339" alt=""></a></li>
                      <li><a href="http://placehold.it/500x339" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/500x339" alt=""></a></li>
                    </ul>
                  </div>
                </div>
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-picture-o"></i></a>
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
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a data-lightbox="image" href="http://placehold.it/500x339"><i class="fa fa-plus"></i></a>
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                </div>
                <a class="hover-link" data-lightbox="image" href="http://placehold.it/500x339">View more</a>
              </div>
            </div>
            <!-- Portfolio Item End -->

            <!-- Portfolio Item Start -->
            <div class="gallery-item design">
              <div class="thumb">
                <div class="flexslider-wrapper" data-direction="vertical">
                  <div class="flexslider">
                    <ul class="slides">
                      <li><a href="http://placehold.it/500x339" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/500x339" alt=""></a></li>
                      <li><a href="http://placehold.it/500x339" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/500x339" alt=""></a></li>
                      <li><a href="http://placehold.it/500x339" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/500x339" alt=""></a></li>
                    </ul>
                  </div>
                </div>
                <div class="overlay-shade"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                      <a href="#"><i class="fa fa-picture-o"></i></a>
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

@endsection