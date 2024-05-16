<?php

require_once 'vendor/autoload.php';

use App\Song;

$song = new Song('The River', 'Bruce Springsteen', 300);

$songAsText = $song->write(true);

var_dump($songAsText);