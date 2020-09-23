@extends('backendtemplate')
@section('title','Staff Detail')

@section('content')
  <h1>Staff Detail</h1>

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
          <p class="card-text">Department: {{$staff->department->name}}</p>
          <p class="card-text">Position: {{$staff->position->name}}</p>

        </div>
      </div>
    </div>
  </div>

@endsection