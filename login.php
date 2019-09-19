<?php

echo $_GET['step'];



?>



<!DOCTYPE html>
<html>
<head>
    <title>FORM</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="TD2.css" />

</head>
<body>
<div class="form">
    <form method="post" action="test-pass.php" enctype="multipart/form-data">


             <input type="text" name="username" value="joe">Login</input>
            <input type="password" name="mdp" value="yes">Mot De Passe</input>
            <input type="submit" name="bouton">Bouton</input>





    </form>
</div>

</body>
</html>
