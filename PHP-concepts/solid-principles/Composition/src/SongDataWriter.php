<?php

namespace App;

class SongDataWriter
{
    public function write(Song $song): string
    {
        return $song->title . ' by ' . $song->artist . ' (' . $song->getDurationInMinutes() . ')';
    }
}