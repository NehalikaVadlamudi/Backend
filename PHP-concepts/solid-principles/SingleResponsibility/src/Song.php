<?php

namespace App;

class Song
{
    public function __construct(
        private string $title,
        private string $author,
        private string $duration
    )
    {}

    public function write($format): string
    {
        if($format === 'json'){
            return json_encode($this);
        }
        return $this->title . 'by' .$this->author.'-'.$this->getDurationInMinutes();
    }


    private function getDurationInMinutes(): string
    {
        $seconds = $this->duration % 60;
        $seconds = str_pad($seconds, 2, '0',STR_PAD_LEFT);
        $minutes = (int) (($this->duration-$seconds) / 60);

        return $minutes . ':' . $seconds;
    }
}

?>