<?php

/* autoloading grâce à une fonction anonyme */
spl_autoload_register(function ($class) {
    include '../class/' . $class . '.php';
});

$formInscription = new BootstrapForm($_POST);

?>
<!doctype html>
<html lang="fr">

<head>
    <title>Affichage formulaire</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <form action="#" method="POST">

            <?php
            echo $formInscription->input('pseudo');
            echo $formInscription->input('nom');
            echo $formInscription->input('prenom');
            echo $formInscription->inputPS('password');
            echo $formInscription->submit();
            ?>

        </form>

        <?php

        $formConnexion = new BootstrapForm();

        ?>

        <form action="#" method="POST">

            <?php

            echo $formConnexion->input('pseudo');
            echo $formConnexion->inputPS('password');
            echo $formConnexion->submit();

            ?>

        </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>