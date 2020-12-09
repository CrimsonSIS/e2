@extends('templates.master')

@section('title')
Heads or Tails
@endsection

@section('content')
<h2>Instructions</h2 <p>Choose a side, heads or tails. If the coin lands on your side, you win!</p>
<form method='POST' action='/play'>
    <label>
        <input type='radio' name='move' value='heads' checked>
        Heads
    </label>
    <label>
        <input type='radio' name='move' value='tails'>
        Tails
    </label>

    <button type='submit'>Flip</button>
</form>

@if ($results)

<div class=' {{$results ['win'] ? 'won' : 'lost'}}  '>
    <p>The coin landed on {{ $results ['flip'] }}</p>
    @if ($results ['win'])
    You won!
    @else
    You lost...
    @endif
</div>

@endif
@endsection
