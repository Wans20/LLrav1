@extends('layouts.dashboard')
@section('content') 

<h3>Form Student</h3>
<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" >
      @error('name') <div class="text-muted text-danger">{{$message}}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" class="form-select">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        @error('gender') <div class="text-muted text-danger">{{$message}}</div> @enderror
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">Date-Birth</label>
        <input type="date" class="form-control" name="date_birth" >
        @error('date_birth') <div class="text-muted text-danger">{{$message}}</div> @enderror
      </div>

    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <textarea type="text" class="form-control" name="address"></textarea>
      @error('address') <div class="text-muted text-danger">{{$message}}</div> @enderror
    </div>

    <div class="mb-3">
      <label for="major" class="form-label">Major</label>
      <select name="major" class="form-select">
        <option value="english">English</option>
        <option value="indonesia">Indonesia</option>
        <option value="amerika">Amerika</option>
      </select>
      @error('major') <div class="text-muted text-danger">{{$message}}</div> @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
@endsection