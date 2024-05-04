@extends('layouts.main')
@section('content')
    @foreach ($parties as $party)
    <li class="item">{{$party->name}} | {{$party->flat_prefer_id}} | {{$party->is_active}}</li>
    @endforeach
@endsection
