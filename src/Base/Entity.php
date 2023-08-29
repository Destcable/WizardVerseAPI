<?php

namespace Client\Base;

use Client\SpecialAbility;
use Client\Wizard;

abstract class Entity
{
    private string $name;
    private string $description;
    private SpecialAbility $specialAbility;

    public function __construct(string $name, SpecialAbility $specialAbility, string $description)
    {
        $this->name = $name;
        $this->specialAbility = $specialAbility;
        $this->description = $description;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecialAbility(): SpecialAbility
    {
        return $this->specialAbility;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function performMagicalAction() //Метод, который может выполнять какое-то магическое действие, общее для всех существ
    {

    }

    public function communicateWithWizards(Wizard $wizard) //Взаимодейтсвие с волшебником
    {

    }
}