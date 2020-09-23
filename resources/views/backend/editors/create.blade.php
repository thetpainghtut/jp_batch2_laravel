@extends('backendtemplate')
@section('title','Editor Create')

@section('content')
  <h1>Editor Create</h1>
  {{-- Error --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Form --}}
  <form method="post" action="{{route('editors.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="InputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName">
    </div>

    <div class="form-group">
      <label for="InputEmail">Email:</label>
      <input type="email" name="email" class="form-control" id="InputEmail">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection