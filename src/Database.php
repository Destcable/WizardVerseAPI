<?php

namespace Client;

use Client\Base\Wizard;

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
        self::$spells [$spell->getName()]= $spell;
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

    public static function searchSpell(string $name)
    {
        if (isset( self::$spells[$name] )) {
            return self::$spells[$name];
        }
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