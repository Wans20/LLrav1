@extends('layouts.dashboard')
@section('content')

<br>

@if ($message = Session::get('notif'))
    <div class="alert alert-primary  alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<H1>List Student</H1>
<a href="/student/create" class="btn btn-primary mb-3">Input</a>
<table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Date-Birth</th>
        <th scope="col">Address</th>
        <th scope="col">Major</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
            {{-- urutan manual --}}
            {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
            
            {{-- urutan angka sesuai page --}}
            <th scope="row">{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->gender == 'female' ? 'Female' : 'Male'}}</td>
                <td>{{ $item->date_birth }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->major->name }}</td>
                <td>
                  <a href="{{ route('student.edit', ['student' => $item->id]) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('student.destroy', ['student' =>$item->id]) }}" class="d-inline" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  {{-- memberu tampilan next privious --}}
{{ $data->links()}}
@endsection