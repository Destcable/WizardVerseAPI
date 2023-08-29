<?php

namespace Client;

use Client\Base\Wizard;

class ProfessorWizard extends Wizard
{
    public function addSpell(Spell $spell)
    {
        $this->spells [$spell->getName()]= $spell;
    }
}