<?php



$dbLink = mysqli_connect( 'mysql-anthonyziane.alwaysdata.net','189623', 'Voiture123')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , 'anthonyziane_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);



$log = $_POST['login'];
$mdp = $_POST['mdp'];



$query = 'SELECT * FROM user WHERE login = \'' . $log . '\'and \'' . $mdp . '\'';

if (!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête <br/>';
    //Affiche le type d'erreur.
    echo'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    //Affiche la requête envoyée.
    echo'Requête : ' . $query . '<br/>';
    exit();
}

else

{

    header('Location: login.php');

}





?>