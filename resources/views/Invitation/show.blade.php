@extends('layouts/main')
@section('content')
    <div>
        <form action="{{route('invitation.accept')}}" method="post">
        @csrf
{{$party->id}} {{$party->name}}
            <input type="text" class="form-controll" name="invite_token" value="{{$party->invite_token}}" readonly>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

@endsection
