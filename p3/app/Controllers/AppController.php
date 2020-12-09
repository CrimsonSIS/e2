<?php
namespace App\Controllers;

class AppController extends Controller
{
    public function play()
    {
        # Data from form
        $this->app->validate([
            'tosses' => 'digit',
            'bet' => 'digit'
        ]);
        $tosses = $this->app->input('tosses');
        $bet = $this->app->input('bet');

        $winnings = 0;
        for ($toss = 0; $toss < $tosses; $toss++) {
            $dice = random_int(1, 6);
            $winnings += $dice * $bet;
        }
        if ($winnings >= 100) {
            $win = true;
        } else {
            $win = false;
        }

        $data = [
            'tosses' => $tosses,
            'bet' => $bet,
            'winnings' => $winnings,
            'win' => $win ? 1 : 0,
            'time' => date('Y-m-d H:i:s')
        ];

        # Persist to database
        $this->app->db()->insert('rounds', $data);
        
        $this->app->redirect('/', [
            'results' => [
                'tosses' => $tosses,
                'bet' => $bet,
                'winnings' => $winnings,
                'win' => $win
            ]
        ]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');
        
        return $this->app->view('history', [
            'rounds' => $rounds
        ]);
    }
    
    public function round()
    {
        $id = $this->app->param('id');
        $round = $this->app->db()->findByID('rounds', $id);
        return $this->app->view('round', [
            'round' => $round
        ]);
    }

    public function index()
    {
        $results = $this->app->old('results');
        return $this->app->view('index', [
            'results' => $results
        ]);
    }
}
