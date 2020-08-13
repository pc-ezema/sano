@extends("layouts.frontend")


@section('title')

    {{ config('app.name') }} | Our products

@endsection

@section('main_content')

    <!-- Section: inner-header -->
    @include("layouts.breadcrumb" , ["title" => "Products" , "subtitle" => "Our Products"])

    <!-- Section: Depertment -->
    <section id="depertment" class="">
        <div class="container">
            <div class="section-content">
                <div class="row">
                  @foreach ($datas as $data)
                    <div class="col-sm-6 col-md-4">
                        <div class="box-hover-effect effect-siberia mb-30">
                            <div class="effect-wrapper">
                                <div class="thumb">
                                    <img class="img-fullwidth" src="{{ $data->thumbnail }}" alt="project">
                                </div>
                                <div class="info-box">
                                    <div class="info-title bg-theme-colored-transparent-9">
                                        <h3 class="title text-white mt-0">{{ $data->title }}</h3>
                                    </div>
                                    <div class="info-content text-white bg-theme-colored-transparent-9">
                                        <h3 class="text-white mt-0"><i class="fa fa-globe font-24"></i> {{ $data->title }}
                                        </h3>
                                        <ul style="list-style-type: square; margin-left: 15px;"> {!! $data->description !!} </ul>
                                        <button class="buy_button">Buy</button>
                                    </div>
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
