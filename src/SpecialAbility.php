<?php

namespace Client;

class SpecialAbility
{
    private string $ability;

    public function __construct(string $ability)
    {
        $this->ability = $ability;
    }

    public function getAbility(): string
    {
        return $this->ability;
    }

}