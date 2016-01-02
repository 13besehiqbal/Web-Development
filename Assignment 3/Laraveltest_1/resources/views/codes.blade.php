@extends('app')

@section('content')
<div class="container">

    <div class="row">
        <h2>Codes written by users are given below</h2>
        @foreach ($codes as $c)
            <a href="/codes/{{$c->user_id}}">{{$c->user->name}}'s code</a><br><hr>
        @endforeach
    </div>

</div>
@endsection
