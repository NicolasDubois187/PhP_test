<?php

class Pokemon
{
  public $name;
  public $attack;
  protected $_damage = 10;
  protected $_life = 100;
  protected $_level = 1;

  public function __construct($name, $attack)
  {
    $this->name = $name;
    $this->attack = $attack;
  }

  public function makeAttack($target)
  {
    echo "{$this->name} attaque {$target->name} avec {$this->attack}" . "<br>";
    $target->takeAttack($this->_damage);
  }
  public function takeAttack($damage)
  {
    $this->_life -= $damage;
    echo "{$this->name} reçoit {$damage} points de dégats" . "<br>";
    if ($this->_life <= 0) {
      echo "<pre>";
      echo "{$this->name} est mort !" . "<br>";
      echo "</pre>";
    } else {
      echo "<pre>";
      echo "{$this->name} n'a plus que {$this->_life} points de vie" . "<br>";
      echo "</pre>";
    }
  }
  public function levelUp()
  {
    $this->_level++;
    $this->_damage += 10;
    echo "{$this->name} gagne 1 niveau est passe donc au level {$this->_level}";
  }

  public function getLife()
  {
    return $this->_life;
  }
  public function getDamage()
  {
    return $this->_damage;
  }
}
