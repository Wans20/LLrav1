@extends('layouts.dashboard')
@section('content')

<br>
<a href="/student/create" class="btn btn-primary mb-3">Input</a>
<table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Date-Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Major</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
            <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->date_birth }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->major }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection