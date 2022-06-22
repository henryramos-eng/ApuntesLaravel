@extends('master')
 
@section('content')
 
    <div class="jumbotron">
        <h1>{{ $variableone  }}</h1>
 
        <p>{{  $variabletwo  }}</p>
 
        <p><a class="btn btn-primary btn-lg" href="#" role="button"> {{  $variablethree  }}</a></p>
    </div>
 
@endsection