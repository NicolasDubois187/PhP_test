<?php

class Chat extends Animal
{
  public $type = "Chat";
  public $race;
  public $nom;

  public function __construct($race, $nom, $nbrDePattes, $couleur, $poil)
  {
    parent::__construct($nbrDePattes, $couleur, $poil);

    $this->race = $race;
    $this->nom = $nom;
  }

  public function miauler()
  {
    return "miaou !";
  }
}
