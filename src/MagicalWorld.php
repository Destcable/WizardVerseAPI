<?php

namespace Client;

use Client\Base\MagicalEvent;

class MagicalWorld 
{ 
    private $events = [];

    public function addEvent(MagicalEvent $event)
    { 
        $this->events [$event->getName()]= $event;
    }

    public function listEvents(): array
    { 
        return $this->events;
    }
}