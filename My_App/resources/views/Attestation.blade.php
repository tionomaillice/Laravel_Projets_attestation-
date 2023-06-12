@extends('layouts.App_AttestaFlow')

@section('content')
<h1>Retrait</h1>
    @foreach ($attests as $attest)
         <h3><a href="#">{{$attest}}</a>  </h3>
    @endforeach

@endsection
