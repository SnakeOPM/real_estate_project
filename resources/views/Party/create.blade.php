@extends('layouts.main')
@section('content')
    <form action="{{route('party.store')}}" method="POST">
    @csrf
        <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
        <label for="flat_prefer_id">flat</label>
        <input type="number" name="flat_prefer_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
