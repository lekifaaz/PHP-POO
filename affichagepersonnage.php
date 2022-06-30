<?php
    // La pratique ceut que l'on affiche un objet dans une page différente que celle de la classe. La classe se trouve dans un fichier externe; il prendra une majuscule et qui devra être nommé du nom de la classe. Exemple: Class.php
    require ("Personnage.php");
    require ("Magicien.php");

    $mario = new Personnage("Mario");
    $luigi = new Personnage("Luigi");
    $pikachu = new Personnage("Pikachu");
    // var_dump($mario);

    $pikachu -> crier();

    // On applique la méthode régénérer à notre personnage et par conséquent sa vie repasse à 100

    $luigi -> regenerer(5);
    var_dump($pikachu->mort());
    // $pikachu-> vie = 0;

    echo "<p>" . $pikachu->getNom() . "</p>";

    var_dump($mario);

    echo "<br>";

    var_dump($luigi);

    echo "<br>";

    $luigi -> regenerer(5);
    var_dump($luigi);

    echo "<br>";

    var_dump($pikachu);
    echo "<br>";

    var_dump($pikachu->mort());
    echo "<br>";

    $pikachu->attaque($mario);
    if($mario->mort()){
        echo "<p>Mario est mort!!!</p>";
    }else{
        echo "<p>Mario a survécu, il lui reste " . $mario->vie . " points de vie. Ouf! </p>";
    }

    echo "<br>";

    $pikachu -> setNom("Princess Peach");
    var_dump($pikachu->getNom());

    echo "<br>";

    $merlin = new Magicien("Merlin");
    var_dump($merlin);

    var_dump($merlin->vie);

    $merlin->attaque($luigi);

    // echo "<p>Mario a " . $mario->vie . " points de vie.</p>";

    var_dump($luigi);
?>