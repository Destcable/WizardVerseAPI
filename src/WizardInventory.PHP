<?php

namespace Client;

use Client\Base\Wizard;

class WizardInventory
{
    private Wizard $character;
    private array $items = [];
    private array $equippedItems = [];

    public function __construct(Wizard $character)
    {
        $this->character = $character;
    }
}