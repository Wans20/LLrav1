@extends('layouts.dashboard')

@section('content')
<h3>Major {{ $major->name }}</h3>
{{-- fungsi count dari php asli --}}
<h5>All Students : {{ count($major->students) }}</h5>
{{-- fungsi count dari laravel --}}
{{-- <p>Jumlah Siswa : {{ $major->students->count() }}</p> --}}
<table class="table table-striped table-hover">
    <thead class="table-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Student Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($major->students as $student)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $student->name }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection