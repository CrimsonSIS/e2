<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/history' => ['AppController', 'history'],
    '/round' => ['AppController', 'round'],
    '/play' => ['AppController', 'play']
];
