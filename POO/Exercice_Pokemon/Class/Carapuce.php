<?php

class Carapuce extends Pokemon implements PokemonInterface
{
  public function __construct($name, $attack = "Bulle d'eau")
  {
    parent::__construct($name, $attack);
  }

  public function evolue()
  {
    $lastName = $this->name;
    $this->name = "Tortank";
    $this->attack = "Hydrocanon";
    $this->_damage *= 10;
    $this->_life *= 10;
    $this->_level++;
    echo "{$lastName} évolue en {$this->name}";
  }
}
