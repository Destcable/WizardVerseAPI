

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