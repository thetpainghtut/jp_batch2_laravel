@extends('backendtemplate')
@section('title','Staff List')

@section('content')
  <h1>Staff List</h1>
  <a href="{{route('staff.create')}}">Add New Staff</a>
  {{-- Table --}}
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($staff as $row)
        <tr>
          <td>{{$row->id}}</td>
          <td>{{$row->name}}</td>
          <td>{{$row->phoneno}}</td>
          <td>
            <a href="{{route('staff.show',$row->id)}}">Detail</a>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection