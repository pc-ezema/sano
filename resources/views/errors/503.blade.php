@extends("layouts.frontend")

@section("title")

  sano | coming socket_set_nonblock

  @endsection

  @section("main_content")

    <!-- Section: home -->
    <section id="home" class="bg-lightest fullscreen">
      <div class="display-table text-center">
        <div class="display-table-cell">
          <div class="container pt-0 pb-0"><div class="row">
              <div class="col-md-10 col-md-offset-1">
                <h1 class="text-theme-colored font-weight-100 font-64">We Are Coming Soon</h1>                
                
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div id="countdown17" class="ClassyCountdownDemo"></div>
                                    
                    <!-- jQuery Classy Countdown Scripts and CSS -->
                    <link href="js/classycountdown/css/jquery.classycountdown.css" rel="stylesheet" type="text/css">
                    <script src="js/classycountdown/js/jquery.knob.js"></script> 
                    <script src="js/classycountdown/js/jquery.throttle.js"></script> 
                    <script src="js/classycountdown/js/jquery.classycountdown.js"></script> 

                    <!-- Classy Countdown Script -->
                    <script>
                      $(document).ready(function() {
                        $('#countdown17').ClassyCountdown({
                            theme: "flat-colors-very-wide",
                            end: $.now() + 10000
                        });
                      });
                    </script>
                  </div>
                </div>
              </div>
              
              <!-- <div class="col-md-8 col-md-offset-2">
                <p class="font-14">Sorry.... We are improving and fixing problems of our website.<br>We will be back very soon....</p>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection