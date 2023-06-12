@extends('layouts.App_AttestaFlow')

@section('content')
<h1>Connectez-Vous</h1>
    @foreach ($connects as $connect)
        <h3><a href="#">{{$connect}}</a>  </h3>
    @endforeach

@endsection
