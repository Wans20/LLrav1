@extends('layouts.dashboard')
@section('content')

<br>

@if ($message = Session::get('notif'))
    <div class="alert alert-primary  alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<a href="/major/create" class="btn btn-primary mb-3">Input</a>
<table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>
                  <a href="{{ route('major.show', ['major' => $item->id]) }}" class="btn btn-primary">Students</a>
                  <a href="{{ route('major.edit', ['major' => $item->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('major.destroy', ['major' =>$item->id]) }}" class="d-inline" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection