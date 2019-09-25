



<!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TD2.css" />

</head>
<body>

<?php

if ($_GET['step'] == 'ERROR')
{
    echo 'YA HAJA LE SANG' . PHP_EOL;

}



?>
<div class="form">
    <form method="get" action="test-pass.php" enctype="multipart/form-data">


             <input type="text" name="login" value="Joe">Login</input>
            <input type="password" name="mdp" value="voiture">Mot De Passe</input>
            <input type="submit" name="bouton">Bouton</input>





    </form>
</div>

</body>
</html>
