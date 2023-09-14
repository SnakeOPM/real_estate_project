@extends('layouts/main')
@section('content')
    <div>
        <form action="{{route('invitation.accept', $party->invite_token)}}" method="post">
{{$party->id}}
        </form>
    </div>

@endsection
