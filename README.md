

Создание факультета
```php
use Client\Faculty;

$gryffindor = new Faculty("Gryffindor");
```

Создание волшебника
```php
use Client\Wizard;

$HarryPotter = new Wizard("Harry Potter", $gryffindor, 17);
```

Создание заклинания
```php
use Client\Spell;

$expelliarmus = new Spell("Expelliarmus", "Charm", "Disarms your opponent");
```

Добавление заклинания волшебнику
```php
$HarryPotter->addSpell($expelliarmus);
```

Удаление заклинания у волшебника
```php
$HarryPotter->removeSpell(
    $expelliarmus->getName()
);
```

Инациализация базы
```php
use Client\Database;
```

Добавление волшебника в базу
```php
Database::addWizard($HarryPotter);
```

Добавление заклинания в базу
```php
Database::addSpell($expelliarmus);
```

Фильтр по факультетам
```php
Database::filterByFaculty($gryffindor)
```

Пример
```php
<?php

use Client\Wizard;
use Client\Spell;
use Client\Database;
use Client\Faculty;
use Client\SpecialAbility;

use Client\Entity\Dragon;
use Client\Entity\Phoenix;

$fireBreathing = new SpecialAbility("Breathes fire");
$healingTears = new SpecialAbility("Heals with tears");

$dragon = new Dragon("Fire Dragon", $fireBreathing, "Breathes fire and has tough scales");
$phoenix = new Phoenix("Fawkes", $healingTears, "Rises from ashes and has healing tears");

$gryffindor = new Faculty("Gryffindor");

$wizard1 = new Wizard("Harry Potter", $gryffindor, 17);
$wizard2 = new Wizard("Hermione Granger", $gryffindor, 18);

$spell1 = new Spell("Expelliarmus", "Charm", "Disarms your opponent");
$spell2 = new Spell("Lumos", "Spell", "Creates light at the tip of your wand");

$wizard1->addSpell($spell1);
$wizard2->addSpell($spell2);

$wizard2->removeSpell(
    $spell1->getName()
);

Database::addWizard($wizard1);
Database::addWizard($wizard2);

Database::addSpell($spell1);
Database::addSpell($spell2);

Database::filterByFaculty($gryffindor);
Database::searchSpell('Expelliarmus');

$wizards = Database::getWizards();
$spells = Database::getSpells();
```
