@extends('templates.master')

@section('title')
@endsection

@section('content')
<h1>Project 3<p>Naughts and Crosses</h1>
<h1>O &rarr; &larr; X</h1>
<h3>Jerald Dana Cole<h3>
<h2>Instructions</h2>
<ul>
    <li>This is an interactive two-player game of Tic-Tac-Toe.</li>
    <li>X goes first, followed by O.</li>
    <li>There are nine squares on the gameboard, numbered 1 to 9.
    <li>On your turn, enter the Location number of the square you wish to mark.</li>
</ul>
<form method='POST'>
    <h2>X's Turn</h2>

    <h2>Select a square by number [1 to 9]</h2>
    <input type='text' name='location' id='location' size='1'>
    <label for='location'>Location</label>
    <p>
    <button type='submit'>Mark Square!</button>
</form>



@endsection
