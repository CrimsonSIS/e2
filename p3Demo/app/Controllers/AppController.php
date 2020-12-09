<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function index()
    {
        $results = $this->app->old('results');
        dump($results);
        
        return $this->app->view('index', [
            'results' => $results
        ]);
    }

    public function history()
    {
        return $this->app->view('history');
    }

    public function round()
    {
        return $this->app->view('round');
    }

    public function play()
    {
        $move = $this->app->input('move');

        # Save results to the database
        $moves = ['heads', 'tails'];
        $flip = $moves [rand(0, 1)];

        $win = $move == $flip;

        $data = [
            'move' => $move,
            'win' => $win ? 1 : 0,  #Convert T or F to 1 or 0
            'time' => date('Y-m-d H:i:s'),
        ];

        $this->app->db()->insert('rounds', $data);

        # dump($choice); dump($flip); dump($winner);
        # dump($data);

        # Redirect the user back to the home page to play again...
        $this->app->redirect('/', [
            'results' => [
                'move' => $move, 'win' => $win, 'flip' => $flip,
            ]
        ]);
    }
}
