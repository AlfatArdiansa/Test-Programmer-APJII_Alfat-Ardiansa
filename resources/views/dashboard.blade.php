@extends('layouts.main')

@section('content')
<div class="container" style="max-height: 80vh; overflow-y: scroll">
  <table class="table table-bordered table-light" style="">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Company</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($participants as $participant)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $participant->name }}</td>
          <td>{{ $participant->company }}</td>
          <td>{{ $participant->email }}</td>
          <td>{{ $participant->phone }}</td>
          <td><img src="/storage/{{ $participant->photo }}" alt="" width="50"></td>
          <td>
            <form action="/registration/{{ $participant->id }}" method="POST">
              @method("delete")
              @csrf
              <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>  
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection