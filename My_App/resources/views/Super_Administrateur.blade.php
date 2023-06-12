@extends('layouts.App_AttestaFlow')

@section('content')
<h1>A FAIRE</h1>
    @foreach ($admins as $admin)

        <h3><a href="#">{{$admin}}</a>  </h3>
    @endforeach

@endsection
