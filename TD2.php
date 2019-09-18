<?php


//$bdd = new PDO('mysql:host=localhost;dbname=user1;charset=utf8', 'root', '');

//$xaxa=$bdd->exec('INSERT INTO `user1` (`id`, `mail`, `mdp`, `date`) VALUES ('9', 'toutafait', '124', '2000-08-18')');


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
        <form method="post" action="data-processing.php" enctype="multipart/form-data">

        <p>
        	 <input type="text" name="Identifiant">Identifiant</input>
             <input type="radio" name="H">H</input>
             <input type="radio" name="F">F</input>
             <input type="text" name="E-mail">Mail</input>
             <input type="password" name="Mot de passe">Mot de passe</input>
             <input type="password" name="Vérification du mot de passe">Vérifier mot de passe</input>
             <input type="text" name="Téléphone">Téléphone</input>
             <select size="4">
             	 <option value="France">France</option>
             	 <option value="Algérie">Algérie</option>
             	 <option value="Allemagne">Allemagne</option>
             	 <option value="Lituanie">Lituanie</option>
             </select>
            <input type="checkbox" name="Conditions générales">Conditions générales</input>
            <input type="submit" name="action" value="mailer"></input>


        </p>
       </form>
   </div>
   
    </body>
</html>

