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
              <!-- <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active" aria-expanded="true"> <span class="open-sub"></span> <strong>Q. What do you mean by item and end product?</strong></a> </div>
                <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                  <div class="panel-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi inventore laborum libero officiis</p> 
                    <p>Accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque, dolor praesentium.</p>
                  </div>
                </div>
              </div> -->

              <div class="panel">
                <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>{{ $data->question }}</strong></a> </div>
                <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                  <div class="panel-content">
                    <p>{{ $data->answer }}</p> 
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
         
        </div>
      </div>
    </section>

@endsection