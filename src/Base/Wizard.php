<?php

namespace Client\Base;

use Client\Faculty;
use Client\Spell;

abstract class Wizard
{
    private string $name;
    private Faculty $faculty;
    private int $age;
    protected array $spells = [];

    public function __construct(string $name, Faculty $faculty, int $age)
    {
        $this->name = $name;
        $this->faculty = $faculty;
        $this->age = $age;
    }

    public function getSpells(): array
    {
        return $this->spells;
    }

    public function removeSpell(string $name)
    {
        unset($this->spells[$name]);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getFaculty(): Faculty
    {
        return $this->faculty;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}