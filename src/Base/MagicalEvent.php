<?php
namespace Client\Base;
class MagicalEvent
{ 
    private string $name;
    private string $description;
    private string $date;

    public function __construct(string $name, string $description, string $date)
    {
        $this->name = $name;
        $this->description = $description;
        $this->date = $date;
    }

    public function getName(): string
    {
        return $this->name;
    }
}