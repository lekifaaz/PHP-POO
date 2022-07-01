<?php 

class Magicien extends Personnage 
{
    /* Pour éviter d'avoir à répéter ce qui se toruve dans Personnage.php et par conséquent avoir des codes lourds et peu manipulables, on va utiliser le système d'héritage. Ce système va également permettre de modifier quelque chose dans la classe parente et que cette modification se passe aussi dans la classe enfante */

    /* Cependant, si la notion que l'on veut définir est private dans la classe parente, alors notre instanciation, notre personnage, aura deux fois la même propriété. Si on veut redéfinir cette propriété, il faut donc que celle-ci soit soit en public soit en protected. EXEMPLE : la propriété $vie*/

    public $vie = 20;

    /* La classe enfant peut changer la valeur de la variable mais seulement de façon inférieure ou égale. C'est à dire que dans l'ordre on a d'abord private puis protected puis public. Si une variable dans le parent est protected, on ne pourra pas lui mettre la valeur private qui est "au dessus" de protected. */

    public function attaque($cible)
    {
        // $cible->vie -= 2 * $this->atk;
        /* au lieu de faire 2* $this->atk on peut faire la même méthode que dans la classe parente puis appeller la méthode parente grâce à parent:: */
        $cible->vie -= $this->atk;
        parent::attaque($cible);
        echo "<p>" .$this->nom . " attaque " . $cible->nom . "</p>";
        $cible->empecher_negatif();
    }

}

?>