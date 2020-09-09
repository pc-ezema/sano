@extends("layouts.frontend")

@section("title")

  {{ config("app.name") }} | OFSP Bakery

@endsection

@section("main_content")

    <!-- Section: inner-header -->
    @includeIf("layouts.breadcrumb", ["title" =>"About Us" , "subtitle" => "About Us"])

    <!-- Section About -->
   
   

   
@endsection