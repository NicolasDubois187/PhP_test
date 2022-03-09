<?php

abstract class Animal
{
  public static $total = 0;

  public $type = "Animal";
  public $nbrDePattes;
  public $couleur;
  public $poil; // "long" || "court"

  public function __construct($nbrDePattes, $couleur, $poil)
  {
    $this->nbrDePattes = $nbrDePattes;
    $this->couleur = $couleur;
    $this->poil = $poil;

    self::$total++;
  }

  public function dormir()
  {
    return "$this->nom se couche !";
  }
  public function manger()
  {
    return "$this->nom mange !";
  }
}
