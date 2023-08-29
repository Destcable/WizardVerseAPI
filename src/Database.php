<?php

namespace Client;

class Database
{
    private static array $wizards = [];
    private static array $spells = [];

    public static function addWizard(Wizard $wizard)
    {
        self::$wizards [$wizard->getName()]= $wizard;
    }

    public static function addSpell(Spell $spell)
    {
        self::$spells []= $spell;
    }

    public static function filterByFaculty(Faculty $faculty)
    {
        $wizardFilter = [];
        foreach (self::$wizards as $wizard) {
            if ($wizard->getFaculty()->getName() === $faculty->getName()){
                $wizardFilter [$wizard->getName()]= $wizard;
            }
        }

        return $wizardFilter;
    }

    public static function getWizards(): array
    {
        return self::$wizards;
    }

    public static function getSpells(): array
    {
        return self::$spells;
    }
}