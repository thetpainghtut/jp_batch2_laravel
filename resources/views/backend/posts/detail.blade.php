@extends('backendtemplate')
@section('title','Staff Detail')

@section('content')
  <h1>Staff Detail</h1>
  {{-- <a href="{{route('staff.index')}}">Back</a>
  

  <p>Name: {{$staff->name}}</p>
  <p>Phone No: {{$staff->phoneno}}</p>
  <p>Salary: {{$staff->salary}}</p>
  <p>Address: {{$staff->address}}</p> --}}

  <a href="{{route('staff.index')}}" class="btn btn-primary mb-2">Back</a>

  <div class="card mb-3">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset($staff->profile)}}" alt="Staff Profile" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">{{$staff->name}}</h4>
          <p class="card-text">Phone No: {{$staff->phoneno}}</p>
          <p class="card-text">Salary: {{$staff->salary}}</p>
          <p class="card-text">Address: {{$staff->address}}</p>
        </div>
      </div>
    </div>
  </div>

@endsection