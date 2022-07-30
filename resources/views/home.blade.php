@extends('layouts.app')
@section('content')

<div class="container-fluid offset-md-4">

<h1>Hello : {{Auth::user()->name}}</h1>

</div>



@endsection