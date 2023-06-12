@extends('layouts.App_AttestaFlow')

@section('content')
<h1> Services</h1>
    @foreach ($roles as $role)
         <h3><a href="#">{{$role}}</a>  </h3>
    @endforeach

@endsection
