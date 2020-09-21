@extends('backendtemplate')
@section('title','Staff List')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Staff List</h1>
      <a href="{{route('staff.create')}}" class="btn btn-success">Add New Staff</a>
      {{-- Table --}}
      <table class="table my-3">
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
                <a href="{{route('staff.show',$row->id)}}" class="btn btn-info">Detail</a>
                <a href="{{route('staff.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                <form method="post" action="{{route('staff.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection