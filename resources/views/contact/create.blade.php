@extends('layouts.app-layout')
@section('subtitle','Create customer')
@section('navbar')
    @include('layouts.navbar-guest')
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="{{route('contact.store')}}" method="post">
        @csrf
        <h1>Contact Us</h1>
        <div class="form-group row">
          <div class="col-md-12">
            <label for="name">Name</label>
            <div class="input-group">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}">
            </div>
            <small class="text-danger">{{$errors->first('name')}}</small>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="email">Email</label>
            <div class="input-group">
              <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}">
            </div>
            <small class="text-danger">{{$errors->first('email')}}</small>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-md-12">
            <label for="message">Message</label>
            <div class="input-group">
              <label for=""></label>
              <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
            </div>
            <small class="text-danger">{{$errors->first('message')}}</small>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Send message</button>
      </form>
    </div>
  </div>
</div>
@endsection