<?php




//$xaxa=$bdd->exec('INSERT INTO `user1` (`id`, `username`, `datasse`, `pays`, \'sex\', \'mdp\', \'tel\', \'mail\' ) VALUES ( \'9\', \'joe\', \'2000-0_-14\', \'France\', \'H\', \'voiture\', \'nickel\', \'anthony@gmail.com\' )');


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
            <input type="submit" name="action" value="mailer">


        </p>
       </form>
   </div>
   
    </body>
</html>

