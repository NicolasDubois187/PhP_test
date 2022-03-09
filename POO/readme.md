# Les Bases

  - Les bases (class et propriétés publique)
  - Le constructeur
  - Propriété privé et Getter & Setter


# Niveau un peu plus avancé

## Éléments statiques
   >> Les élements statiques sont rattachés non pas aux **instances d'objets** mais directement à la **classe** !
   >> Il n'est pas nécessaire d'**instancier** un objet pour pouvoir y accéder.
   >> En tant qu'éléments statiques, nous avons : *les constantes de classes*, *les attributs* et *les méthodes static*.

  - Les constantes
    >> **Les contantes** sont des sortes d'attributs appartenant à la *classe* dont la valeur ne change jamais.
    > > Ont doit donc absolument lui indiquer une valeur à sa création

  - Attributs statiques
    >> **Un attribut statique** appartient à la *classe* et non à un *objet*. 
    >> Ainsi, tous les *objets* auront accès à cet attribut, et cet **attribut** aura la même valeur pour tous les *objets*.

  - Les méthodes statiques
    >> **Les méthodes statiques** sont portées par la *class*. Elles existent en dehors de toutes instances d'objet et peuvent accéder seulement aux *constantes* et *attributs* **statiques**

## Héritage
  >> **L'héritage** est très utile pour définir et abstraire certaines *fonctionnalités communes* à plusieurs classes, tout en permettant la mise en place de *fonctionnalités supplémentaires* dans les classes enfants, sans avoir à réimplémenter en leur sein toutes les fonctionnalités communes.

- Extends
  >> Nous allons pouvoir étendre une **classe** grâce au mot clef **extends**. En utilisant ce mot clef, on va créer une classe **fille** qui va hériter de toutes les propriétés et méthodes de son **parent** par défaut et qui va pouvoir les manipuler de la même façon *(à condition de pouvoir y accéder)*.

- Class abstraite
  > > **PHP** a des classes et méthodes **abstraites**. Les classes définies comme **abstraites** ne peuvent pas être instanciées, et toute classe contenant au moins une méthode **abstraite** doit elle-aussi être **abstraite**. Les méthodes définies comme **abstraites** déclarent simplement la signature de la méthode ; elles ne peuvent définir son implémentation.
  > > Lors de l'héritage d'une classe abstraite, toutes les méthodes marquées comme abstraites dans la déclaration de la classe parente doivent être définies par la classe enfant

- Class final
  >> Le mot-clé **final** empêche les *classes enfants* de redéfinir une méthode ou constante en préfixant la définition avec final. Si la classe elle-même est définie comme finale, **elle ne pourra pas être étendue**.

## Interface
  >> Les **interfaces** vous permettent de créer du code qui spécifie quelles *méthodes* une classe doit implémenter, sans avoir à définir comment ces *méthodes* fonctionneront
  >> Les méthodes doivent obligatoirement être **publiques** !!!

  - Implements
