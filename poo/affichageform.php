<?php
    require"Form.php";
    $forminscription = new Form($_POST);

?>

<form action="#" method="POST">

<?php
    echo $forminscription->input('username');
    echo $forminscription->input('nom');
    echo $forminscription->input('prenom');
    echo $forminscription->inputPS('password');
    echo $forminscription->submit();
?>

</form>

<?php
    // Ici mon code
    $forminscription = new Form();

?>

<form action="#" method="POST">

<?php
    echo $forminscription->input('pseudo');
    echo $forminscription->inputPS('password');
    echo $forminscription->submit();
?>

</form>