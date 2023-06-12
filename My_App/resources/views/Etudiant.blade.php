
@extends('layouts.App_AttestaFlow')

@section('content')
<h1>Bienvenue</h1>
    @foreach ( $etudes as $etude )
        <h3><a href="#">{{$etude}}</a>  </h3>
    @endforeach

@endsection
