# Exercice Todo List

## Index 

1) Créer une BDD **Todos*
  
  1) Créer un e table **Todo**

  * ID clé primaire AI
  * Task
  * Done (true || default => false)

2) Créer un formulaire
  
  * Input type text
  * Input Submit


3) Créer une liste \<ul>\</ul>

## JS

1) Effectuer une requête vers notre fichier PHP
2) On attend la réponse
3) On affiche la réponse[] 
    - **DisplayTask()** -> Parcoure notre tableau de réponse, Crée un \<li>\</li> pour chaque itération et on l
  'injecte dans notre liste

4) À la validation de notre formulaire, on récupère les données via un **FormData**
    - On les envoie à notre fichier PHP via une requête

## PHP

1) On se connecte à notre BDD
2) On vérifie si oui ou non, on reçoit des informations
  >Si NON, cela signifie qu'on veut juste récupérer des infos
  >On effectue notre **SELECT** et on renvoie les datas

  >Si OUI, cela signifie que va traiter des infos avant de les persister en BDD
  >on les traite et on les envoie en BDD
  >On renvoie un message de validation ou d'erreur