@extends('layouts.main')
@section('content')
    <div class="mains">
        <b class="info">
            Просмотр всех бригад, в каждую можно вступить только по ссылке - приглашению
        </b>
    </div>
    @foreach ($parties as $party)
    <li class="item">
        <div>Название - {{$party->name}}</div>
        <div>Рабочий номер дома -   {{$party->flat_prefer_id}}</div>
        <div> Активна ли бригада - {{$party->is_active}}</div></li>
        <button><a href="{{route('party.show', $party)}}">Показать больше</a></button>
    @endforeach
@endsection
