
<?php 

//Pour creer une classe on va utiliser le mot clé class suivi du mom de notre classe, avecune majusculele nom fichier quand il contirentune classedoit prendre une majuscule
//attention un fichier de class ne contient que les informations relatifs a la class à l'interieur l'affichage se fera sur une autre page


class Personnage 
{

 /* on definit des caracteristique de nos personnage gracre a des propriete*/
protected $vie = 15;
public $atk = 20;
/* c'est puerement par convention et pour s'y retrouver dans le code que l'on déclare notre propriété à cet endroit // on pourrrait définir le nom directement dans la pager affichage.php mais c'est fortement déconseillé */
// public $nom;

protected $nom;

 // public est la visibilité de notre variable // on en reparlerta plus tard pour  definir ce qu'elle veut dire mais il existe aussi par exemple protected


/* Losrque l'on crée une instance de classe , on fait appel à un constructeur. Si on veut initialiser une donnée dès la création il faudra utiliser la méthode _construct. Grâce à cette méthode, tous les paramètres qui seront passés entre parenthèses permettront de définir les données voulues*/

/*En l'occurence, nous voulons définir le nom de notre personnage dès sa crétion


/* on définie functions (méthode) qui losrquel'on fait un echo de la phrase */
public function __construct($nom)
{
/*Grâce la façon de faire qui suit, nous allons pouvoir sauvegarder le nom du personnage passé lors de l'instanciation.Le constructeur permet en fait d'implémenter des propriétés de manière initiale.*/

$this->nom =$nom;

}
/*LES GETTERS */
public function getNom()
{

    return $this->nom;

}

/* LES SETTERS */

public function setNom($nom)


{ 

     $this->nom = $nom;

}


public function crier()

{

    echo "JE PARS A L'ATTAQUE!";

}

/* Création de la méthode regenerer */

/* Pour cette methode il faudra utiliser $this => fait référence au personnage (a l'objet)* sur lequel on va appliquer notre méthode 
Pour cette méthode , le but est de mettre la vie du personnage sur lequel elle est appliquée à 100 */






// $this->vie=100;

public function regenerer($vie = null)

/* Si on ne précise pas de chiffres en paramètres alors la vie sera regénérée à 100 sinon si en paramètre on passe 5 par exemple , alors on ajoutera 5 à la vie de notre personnage.*/
{

   if (is_null($vie)){

    $this->vie=100;

   }else{
       $this->vie += $vie;
   }

}


public function mort(){
    /* Cette méthode renvoie le boolées false quand le personnage n'est pas mort et true si le personnage  est mort
     */


return $this->vie <= 0;

}

protected function empecher_negatif()

{

    if($this->vie < 0)
    {
        $this->vie =0;
    }

}




public function attaque($cible)

{


/* $cible represente l'objet passé en paramètre =>en l'occurence cet objet est mario // ici $cible  =$mario*/
// $this représente l'attaquent
//$cible représente la personne attaquée
/*les points de vie de la cible 
 les points d'attaque de l'attaquant */

$cible->vie -= $this->atk;
/*  ici je veux afficher quelque chose sur ma page affichage, je dois utiliser return*/

$cible->empecher_negatif();


}
}


