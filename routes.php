<?php
// Manage server routes
$app->get('/hello/:name', 'Controllers\Greeting::hello');
