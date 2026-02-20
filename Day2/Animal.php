<?php

abstract class Animal
{

    protected string $name;
    protected int $age;
    protected string $word;

    protected abstract function getWord();
    protected abstract function getName();
    protected abstract function getAge();
    public function Talk()
    {
        return "I am " . $this->getName() . " " . $this->getAge() . ": " . $this->getWord()  . " !" . PHP_EOL;
    }
}
