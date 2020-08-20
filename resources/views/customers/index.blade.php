@extends('layouts.app-layout')
@section('subtitle','Customers Data')
@section('navbar')
    @include('layouts.navbar-guest')
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="d-flex justify-content-between align-items-center">
        <h1>Customers</h1>
        <a href="/customers/create" class="btn btn-primary">Create new customer</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-sm table-inverse table-success">
              <thead class="thead-default">
                <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>EMAIL</th>
                  <th>COMPANY</th>
                  <th>STATUS</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($customers as $customer)
                    <tr>
                      <td scope="row">{{$customer->id}}</td>
                      <td><a href="{{route('customers.show',$customer->id)}}" class="text-{{ $customer->status == 'Active' ? 'success' : 'danger'}}">{{$customer->name}}</a></td>
                      <td>{{$customer->email}}</td>
                      <td>{{$customer->company->name}}</td>
                      <td class="text-{{ $customer->status == 'Active' ? 'success' : 'danger'}}">
                        <span class="badge badge-pill badge-{{ $customer->status == 'Active' ? 'success' : 'danger'}}">&nbsp;</span>
                        {{$customer->status}}
                      </td>
                      
                    </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
</div>
@endsection
