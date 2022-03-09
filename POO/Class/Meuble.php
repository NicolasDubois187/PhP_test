<?php

// Bases
class Table
{
  public $marque;
  public $matiere;
  public $pieds;

  public function plier()
  {
    return "la table $this->marque est plié !";
  }
}

// ---------------------------------------------


// Constructeur
class Chaise
{
  public $marque;
  public $matiere;
  public $pieds;

  public function __construct(string $marque, string $matiere, int $pieds)
  {
    $this->marque = $marque;
    $this->matiere = $matiere;
    $this->pieds = $pieds;

    echo "Cette chaise de la marque '$this->marque' est faite en $this->matiere et à $this->pieds pieds ! \n";
  }

  public function plier()
  {
    return "la table $this->marque est plié !";
  }
}

// Propriété Privé et Getter && Setter
class Tabouret
{
  public $marque;
  private $_matiere;
  private $_pieds;

  public function __construct(string $marque, string $matiere, int $pieds)
  {
    $this->marque = $marque;
    $this->_matiere = $matiere;
    $this->_pieds = $pieds;
  }

  public function getMatiere()
  {
    return $this->_matiere;
  }
  public function setMatiere(string $value)
  {
    $this->_matiere = $value;
  }

  public function getPieds()
  {
    return $this->_pieds;
  }
  public function setPieds(int $value)
  {
    if ($value > 0 && $value <= 4) $this->_pieds = $value;
  }
}


//Élements statiques (constantes/attributs/méthodes)
class Meuble
{

  const FABRIQUANT = "Ikea"; // Constante
  public static $nbrDeMeuble = 0; // Attribut statique

  public $color;
  public $marque;

  public function __construct($color, $marque)
  {
    $this->color = $color;
    $this->marque = $marque;

    self::$nbrDeMeuble++; // self:: à la place de $this
  }

  public static function getNbrObjet() // Méthode statique
  {
    return self::$nbrDeMeuble;
  }
}
