@extends('layouts.app-layout')
@section('subtitle','Editing customer '.$customer->name)
@section('navbar')
    @include('layouts.navbar-guest')
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h4>Editing customer "{{$customer->name}}"</h4>
      <form action="{{route('customers.update',$customer->id)}}" method="post" class="pb-5">
        @method('PATCH')
        @include('customers.form')
        <button class="btn btn-primary" type="submit">UPDATE</button> <a class="btn btn-secondary" href="{{route('customers.show',$customer->id)}}">Back</a>
      </form>
    </div>
  </div>
</div>
@endsection