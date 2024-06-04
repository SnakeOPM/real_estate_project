@extends('layouts.main')
@section('content')
    <form action="{{route('flat.store')}}" method="POST">
    @csrf
    <input type="text" name="">
    <button type="submit">Создать</button>

    </form>
@endsection
