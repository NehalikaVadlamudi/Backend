<?php


require_once 'vendor/autoload.php';

use App\Song;

$songWriter = new App\SongDataWriter();

$song = new Song(title: 'The River', artist: 'Bruce Springsteen', duration: '300', writer: $songWriter);

$songAsText = $song->write();

print_r($songAsText);