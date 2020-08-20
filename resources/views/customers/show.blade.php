@extends('layouts.app-layout')
@section('subtitle','Customers '.$customer->name)
@section('navbar')
    @include('layouts.navbar-guest')
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{$customer->name}}</h1>
        <p><strong>Name: </strong>{{$customer->name}}</p>
        <p><strong>Email: </strong>{{$customer->email}}</p>
        <p><strong>Company: </strong>{{$customer->company->name}}</p>
        <form action="{{route('customers.destroy',$customer->id)}}" method="post">
          @method('DELETE')
          @csrf
          <a class="btn btn-primary" href="{{route('customers.edit',$customer->id)}}">Edit</a>
          <button class="btn btn-danger" type="submit">Delete</button>
          <a class="btn btn-secondary" href="{{route('customers.index')}}">Back</a>
        </form>
      </div>
    </div> 
  </div>
@endsection