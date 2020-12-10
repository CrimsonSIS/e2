@extends('templates.master')

@section('title')
p3
@endsection

@section('content')

<h1>Project 3</h1>
<i>Jerald Dana Cole</i>

<h2>Mechanics</h2>
<ul>
    <li>This is a one player dice game.</li><br>
    <li>Your goal is to earn $100 (or more).</li><br>
    <li>Enter the number of tosses and a bet per toss.<p>The value of the toss is the product of number of dots on the face-up side of the dice times the bet amount.<p>For example, say you specify 6 tosses and bet $5 per dot. If a 2 faces-up, 2 x $5 = $10.<br> That process repeats a total of 6 tosses. </li><br>
    <li>A cumulative tally of each roll is recorded for each player.</li><br>
    <li>Again, if you reach or exceed $100, you win!</li>
</ul>
<h2>Game</h2>
<form method='POST' action='/play'>
    <label>
        Number of tosses
        <input type='text' name='tosses' size="3">
    </label>
    <p>
        <label>
            Bet $
            <input type='text' name='bet' size="3">
        </label>
        <p>
            <button type='submit'>Play!</button>
</form>

<h2>Results</h2>

@if ($results)
On {{$results['tosses']}} tosses at ${{$results['bet']}} per dice dot you earned ${{$results ['winnings']}}
<div class='{{$results['win'] ? 'won' : 'lost' }}'>
    @if($results ['win'])
    <p>Greater than or equal to $100. You won!
        @else
        <p>Less than $100. You lost...
            @endif
</div>
@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<a href='/'>Reset</a>&nbsp;&bull;&nbsp;<a href='/history'>Game History</a>
@endsection
