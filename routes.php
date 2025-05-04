<?php

//  Here is where you can register all of the routes for an application.

$noor->get('/', function () {
    return view('welcome');
});
$noor->get('/hello', function () {
    return "<h1> hello from the server</h1>";
});