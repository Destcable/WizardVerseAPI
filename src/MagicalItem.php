<?php

namespace Client;

class MagicalItem
{ 
    private string $name;
    private string $description;
    private string $type;

    public function __construct(string $name, string $description, string $type)
    {
        $this->name = $name;
        $this->description = $description;
        $this->type = $type;
    }
}