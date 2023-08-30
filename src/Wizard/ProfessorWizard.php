<?php

namespace Client\Wizard;

use Client\Base\Wizard;
use Client\Spell;

class ProfessorWizard extends Wizard
{

    public function addSpell(Spell $spell, int $hoursTeach)
    {
        $this->spells [$spell->getName()]= [
            "hoursTeach" => $hoursTeach,
            "type" => $spell->getType(),
        ];
    }

    public function teachSpeel(Spell $speel, StudentWizard $studentWizard)
    {
        if (isset( $this->spells[$speel->getName()] )) {
            $studentWizard->spells [$speel->getName()] = $speel;
        }
    }
}