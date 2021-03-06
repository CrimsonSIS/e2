<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    
    public function migrate()
    {
        $this->app->db()->createTable('rounds', [
            'tosses' => 'varchar(3)',
            'bet' => 'float (8,2)',
            'winnings' => 'float(8,2)',
            'win' => 'tinyint(1)', # 1 or 0 for boolean
            'time' => 'timestamp'
        ]);
    }

    public function seed()
    {
        # Instantiate a new instance of the Faker\Factory class
        $faker = \Faker\Factory::create();

        # Use a loop to create 10 past rounds
        for ($i = 0; $i < 10; $i++) {
            # Set up a round
            $round = [
                'tosses' => rand(0, 25),
                'bet' => rand(0, 100),
                'winnings' => rand(0, 100),
                'win' => rand(0, 1),
                'time' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
            ];
            # Insert the round
            $this->app->db()->insert('rounds', $round);
        }
    }
}
