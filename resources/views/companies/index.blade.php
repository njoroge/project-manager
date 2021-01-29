@extends('layouts.app')

@section('content')
<br/>
<br/>
<div class="col-md-6 col-lg-6 col-md-offset-6 col-lg-offset-6">
  <div class="panel panel-primary justify-content-center">
     <div class="panel-heading ">Companies   <a class =" btn btn secondary text-primary pull-right btn-sm " href="/companies/create">Create New Company >></a></div>
       <div class="panel-body">
        <ul class="list-group">
        @foreach($companies as $company)
        <li class="list-group-item"><a href="/companies/{{$company->id}}">{{ $company->name }}</a></li>
        @endforeach
       </ul>
       </div>
    </div>
</div>
@endsection
