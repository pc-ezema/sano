@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }} | faq

@endsection

@section("main_content")

    <!-- Section: inner-header -->
    @includeIf("layouts.breadcrumb" , ["title" => "FAQ" , "subtitle" => "Frequently Asked Questions"])
    <section>
      <div class="container">
      
        <div class="row">
        @foreach($datas as $data)
          <div class="col-md-8 col-md-offset-2">
            <div id="accordion1" class="panel-group accordion transparent">
             
              <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion{{ $loop->iteration+1 }}" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>{{ $data->question }}</strong></a> </div>
                <div id="accordion{{ $loop->iteration+1 }}" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                  <div class="panel-content">
      
                    <p> {{ $data->answer }} </p>
                  </div>
                </div>
              </div>


            </div>
          </div>
          @endforeach
        </div>
      </div>
      
    </section>

@endsection