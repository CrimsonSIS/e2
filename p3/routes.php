<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/play' => ['AppController', 'play'],
    '/round' => ['AppController', 'round'],
    '/history' => ['AppController', 'history']
];
