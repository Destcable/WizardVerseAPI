

Создание факультета
```php
use Client\Faculty;

$gryffindor = new Faculty("Gryffindor");
```

Создание волшебника

```php
use Client\Base\Wizard;

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
use Client\ProfessorWizard;
use Client\StudentWizard;
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
$slytherin = new Faculty("Slytherin");

$wizard1 = new StudentWizard("Harry Potter", $gryffindor, 17);
$wizard2 = new StudentWizard("Hermione Granger", $gryffindor, 18);
$wizard3 = new StudentWizard("Draco Malfoy", $slytherin, 17);

$professor1 = new ProfessorWizard("Severus Snape", $slytherin, 38);
$professor2 = new ProfessorWizard("Minerva McGonagall", $gryffindor, 55);

$expelliarmus = new Spell("Expelliarmus", "Charm", "Disarms your opponent");
$lumos = new Spell("Lumos", "Spell", "Creates light at the tip of your wand");

$professor1->addSpell($expelliarmus);
$professor1->addSpell($lumos);

Database::addWizard($wizard1);
Database::addWizard($wizard2);

Database::addSpell($expelliarmus);
Database::addSpell($lumos);

Database::filterByFaculty($gryffindor);
Database::searchSpell('Expelliarmus');

$wizards = Database::getWizards();
$spells = Database::getSpells();
```
