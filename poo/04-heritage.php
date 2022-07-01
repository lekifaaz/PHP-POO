<!doctype html>
<html lang="fr">
  <head>
    <title>L'héritage - cours programmation orientée objet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">POO : la programmation orientée objet</h1>
            <p class="lead text-center mt-3">L'héritage</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Introduction</h2>
                <p>L'héritage est une notion essentielle en orienté objet. En effet, on peut avoir besoin de changer certains paramètres d'une classe mais en garder d'autres. <br>
              Exemple: class Magicien extends Personnage
            <br>
          C'est à ce moment qu'intervient la notion d'héritage, elle va permettre de dire dans une nouvelle classe qu'on hérite d'une ancienne. Celle-ci aura donc accès à toutes les propriétés et méthodes <code>public</code> et <code>protected</code> de la class originale.</p>
                <h2 class="text-secondary text-center">Les avantages</h2>
                <p>L'héritage va nous permettre non seulement de garder une organisation optimale pour le code, mais aussi d'avoir le moins de répétition possible. Un autre avantage est que l'on peut redéfinir des propriétés à la volée. Alors que dans la classe parente de Personnage.php les attaques sont à 20, dans la nouvelle classe que nous avons créée, nous allons pouvoir définir des attaques à 40 sans pour autant devoir réécrire (ou copier/coller) le reste du code.</p>
                <h2 class="text-secondary text-center">Utilisation</h2>
                <p>Pour qu'une classe hérite d'une autre, il suffira d'écrire, apr_s l'habituel <code>class Nomclass</code> d'écrire le mot <em>extends</em> suivi de la classe dont on veut hériter. Cette façon de faire permet d'instancier un personnage qui aura peut-être des nouvelles propriétés grâce à notre nouvelle classe.</p>
                <p>Lorsque l'on fera un <em>require</em> de notre nouvelle classe, il faudra bien respecter l'ordre dans lequel on appelle nos classes: d'abords la classe initiale puis celle qui est étendue, notre classe secondaire.</p>
                
                
            </div> <!-- Fin de la col-12 -->
            
            
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>