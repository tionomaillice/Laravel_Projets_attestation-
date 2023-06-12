@extends('layouts.App_AttestaFlow')

@section('content')
<h1>Présentation</h1>
    @foreach ($posts as $post)
         <h3><a href="#">{{$post}}</a>  </h3>
    @endforeach

@endsection
