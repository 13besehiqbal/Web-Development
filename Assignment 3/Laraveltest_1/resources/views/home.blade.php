@extends('app')
@section('content')
<div>
        @if ($user->role == 'Moderator')
            <ul>
                <li><a href="{{ url('/codes') }}">Others' Codes</a></li>
            </ul>
        @endif
    <form     role="form"    action="/home"    method="post"    target="result">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <textarea name="code" rows = "25" cols = "80" id = "code">Start Coading..</textarea>
        <hr>
        <button>Execute/button>
    </form>
    <div>
        <h2>Output</h2>
        <iframe name="result" frameborder="0" border = "solid black 4px"></iframe>
    
</div>
</div>
@endsection
