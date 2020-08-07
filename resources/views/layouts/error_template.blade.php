@if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
               <button class="btn-danger" > <li>{{ $error }}</li></button>
            @endforeach
        </ul>
@endif

@if(session()->has('success_report'))
<button class="btn-success">
    {{ session()->get('success_report')}}
</button>
<br/>
@endif




@if(session()->has('failure_report'))
<button class="btn-danger">
    {{ session()->get('failure_report')}}
</button>
<br/>
@endif
