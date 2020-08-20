@extends('layouts.app-layout')
@section('subtitle','Home')
@section('navbar')
    @include('layouts.navbar-guest')
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Home Page</h1>
      </div>
    </div>
  </div>
@endsection