<?php

class Chien extends Animal
{
  public $type = "Chien";
  public $race;
  public $nom;

  public function __construct($race, $nom, $nbrDePattes, $couleur, $poil)
  {
    parent::__construct($nbrDePattes, $couleur, $poil);

    $this->race = $race;
    $this->nom = $nom;
  }

  public function aboyer()
  {
    return "ouaf ouaf !";
  }
}
