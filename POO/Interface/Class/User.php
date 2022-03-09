<?php

class User implements modelInterface
{

  private static $total_user = 0;
  private $id = 0;

  public $name;
  public $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;

    self::$total_user++;

    $this->setId();
  }

  public function getId()
  {
    return $this->id;
  }
  private function setId()
  {
    $this->id = self::$total_user;
  }

  public static function getTotalUser()
  {
    return  self::$total_user;
  }
}
