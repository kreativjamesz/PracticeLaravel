@extends('layouts.app-layout')
@section('subtitle','Create customer')
@section('navbar')
    @include('layouts.navbar-guest')
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h4>Create customer</h4>
      <form action="{{route('customers.store')}}" method="post" class="pb-5">
        @include('customers.form')
        <button class="btn btn-primary" type="submit">SAVE</button> <a class="btn btn-secondary" href="{{route('customers.index')}}">Back</a>
      </form>
    </div>
  </div>
</div>
@endsection