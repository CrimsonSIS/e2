@extends('templates.master')

@section('title')
Game History
@endsection

@section('content')
<h2>Game History</h2>
<ol>
    @foreach ($rounds as $round)
    <li>
        <a href='/round?id={{ $round['id'] }}'> {{$round['time']}}
    </li>
    @endforeach
</ol>
<a href='/'>Home</a>
@endsection
