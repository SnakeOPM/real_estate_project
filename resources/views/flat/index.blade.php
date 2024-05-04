@extends('layouts.main')
@section('content')
    @foreach ($data as $flat)
    <li>{{$flat->address}} {{$flat->price}}</li>
    @endforeach
@endsection
