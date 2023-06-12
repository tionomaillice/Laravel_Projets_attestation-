@extends('layouts.App_AttestaFlow')

@section('content')
<h1>Depot</h1>
    @foreach ($dems as $dem)
         <h3><a href="#">{{$dem}}</a>  </h3>
    @endforeach

@endsection
