<?php

namespace Client;

class Spell
{
    private string $name;
    private string $type;
    private string $effect;

    public function __construct(string $name, string $type, string $effect)
    {
        $this->name = $name;
        $this->type = $type;
        $this->effect = $effect;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getEffect(): string
    {
        return $this->effect;
    }
}