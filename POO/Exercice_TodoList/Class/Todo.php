<?php

// On crée notre classe
class Todo
{
        // On définie une propriété public
        public string $task;

        // On crée notre constructeur
        public function __construct($task){
            $this->task = $task;
    }

    /**
     * @return array|string[]
     */
    public function getArray() : array
    {
        // On transform notre objet en tableau et on le retourne
        return (array) $this;
    }

    /**
     * @param $task Object
     * @return bool
     * @description Méthode pour mettre en place des règles simples de validations
     */
    public static function validate($task) : bool
    {
        // On vérifie que notre tâche n'est pas une chaine de caractère vide et qu'elle fait plus de 3 caractères
        if ($task != "" && strlen($task) > 3) return true;
        else return false;
    }
}