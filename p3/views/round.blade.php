@extends('templates.master')

@section('title')
Round Details
@endsection

@section('content')
<h2>Round Details</h2>
<ol>
    <li>Number of tosses: {{$round['tosses']}}</li>
    <li>Bet $: {{$round['bet']}}</li>
    <li>Winnings $: {{$round['winnings']}}</li>
    <li>Results: {{ $round ['win'] == 1 ? 'Won' : 'Lost'}}</li>
    <li>Time: {{$round['time']}}</li>
</ol>
<a href='/'>Home</a>
@endsection
