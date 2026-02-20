<?php


class Dog extends Animal
{

    public function __construct(string $name, int $age, string $word)
    {
        $this->name = $name;
        $this->age = $age;
        $this->word = $word;
    }
    public function getWord()
    {
        return $this->word;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
}
