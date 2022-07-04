<?php       

class Magicien  extends Personnage
{

/* Pour éviter d'avoir à répéter ce qui se trouve dans Personnage.php et par conséquent avoir des codes lourds et peu manipulable, on va utiliser le système d'héritage.Ce système va également perlettre de modifier quelque chose dans la classe parente et que cette modification se passe aussi dans la classe enfance */

/* Cependant, si la notion que l'on veut redéfinir est private dans la classe parente, alors notre instanciation , notre personnage , aura deux fois la même propriété. Si on veut redéfinir cette propriété, il faut donc que celle-ci soit soit en public soit en protected. EXEMPLE: la propriété $vie */

public$vie =20;

public function attaque($cible)
{
   // $cible->vie -= 2 * $this->atk;
   /* au lieu de faire 2*$this->atk on peut faire la même méthode que dans la classe parente puis appeler la méthode parente grâce à parent :: */

    $cible->vie -= $this->atk;
   parent::attaque($cible); 
   
echo "<p>".$this->nom."attaque".$cible->nom."</p>";

   $cible->empecher_negatif(); //empêche d'aller en dessous de zeéro pour les points de vie 
}


}

?>
