# Exercice Blog

  1 ) Créer une classe **Form** qui n'aura pas vaucation à être instancié.
    Elle devra contenir les fonctions publiques statiques suivantes :

    * isEmail() : bool -> Vérifier qu'une entré est bien au format email 
    * Secure() -> Sécurise et retourne une entrée utilisateur

  2 ) Créer une classe **Post** 
    Elle devra *absolument* contenir la fonction publique suivante (s'en assurer grâce à une **interface**) :

    * isValide() : bool -> Vérifie que les règles de validations sont bien réspéctées avant de pouvoir envoyer un article dans notre base de données
                           Les règles sont les suivantes :

                            1) Le titre doit contenir entre 1 et 30 caractères
                            2) Le contenue d'un article doit contenir entre 3 et 1500 caractères
                            3) Un autheur doit obligatoirement être spécifié
