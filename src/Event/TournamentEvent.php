<?php 

namespace Client\Event;

use Client\Base\MagicalEvent;

class TournamentEvent extends MagicalEvent
{ 
    private int $prize;

    public function __construct(string $name, string $description, string $date, int $prize)
    {
        parent::__construct($name, $description, $date);
        $this->prize = $prize;
    }
}