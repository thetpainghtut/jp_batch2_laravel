@extends('backendtemplate')
@section('title','Staff List')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Editor List</h1>
      <a href="{{route('editors.create')}}" class="btn btn-success">Add New Editor</a>
      {{-- Table --}}
      <table class="table my-3">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            {{-- <th>Actions</th> --}}
          </tr>
        </thead>
        <tbody>
          @foreach($editors as $row)
            <tr>
              <td>{{$row->id}}</td>
              <td>{{$row->name}}</td>
              <td>{{$row->email}}</td>
              {{-- <td>
                <a href="{{route('editors.show',$row->id)}}" class="btn btn-info">Detail</a>
                <a href="{{route('editors.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                <form method="post" action="{{route('editors.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                  @csrf
                  @method('DELETE')
                  <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
                </form>
              </td> --}}
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection