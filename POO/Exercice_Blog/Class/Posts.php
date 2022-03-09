<?php
require './Interfaces/postsInterface.php'; // ! Lien relatif par rapport au fichier traitement.php

class Posts implements postsInterface
{
  public $title;
  public $content;
  public $author;

  //Validations Rules
  private static $title_length_min = 1;
  private static $title_length_max = 30;

  private static $content_length_min = 3;
  private static $content_length_max = 1500;

  public function __construct($title, $content, $author)
  {
    $this->title = $title;
    $this->content = $content;
    $this->author = $author;
  }

  public function getArray()
  {
    return [
      "title" => $this->title,
      "content" => $this->content,
      "author" => $this->author,
    ];
  }

  public function isValide()
  {

    if (strlen($this->title) < self::$title_length_min)  return false;
    else if (strlen($this->title) > self::$title_length_max) return false;
    else if (strlen($this->content) <= self::$content_length_min) return false;
    else if (strlen($this->content) > self::$content_length_max) return false;
    else if ($this->author === "") return false;
    else  return true;
  }
}
