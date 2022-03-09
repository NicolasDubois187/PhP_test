<?php
abstract class Form
{

  public static function isEmail($email)
  {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
    else return false;
  }

  public static function secure($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
