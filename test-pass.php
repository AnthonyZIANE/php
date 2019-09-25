<?php


$dbLink = mysqli_connect( 'mysql-anthonyziane.alwaysdata.net','189623', 'Marseille1313')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , 'anthonyziane_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);


session_start();

$log = $_POST['login'];
$mdp = $_POST['mdp'];


$query = 'SELECT * FROM user WHERE username =\'' . $log . '\' AND mdp =\'' . $mdp .'\' ';




if (!($dbResult = mysqli_query($dbLink, $query)))
{
    echo 'Erreur de requête <br/>';
    //Affiche le type d'erreur.
    echo'Erreur : ' . mysqli_error($dbLink) . '<br/>';
    //Affiche la requête envoyée.
    echo'Requête : ' . $query . '<br/>';
    exit();
}


else if (isset($log, $mdp) && !empty(trim($log, $mdp)))*
{
    echo 'NUL' . PHP_EOL;
}




/*if($log == 'Joe' && $mdp =='voiture')
{
    $_SESSION['login'] = 'ok';
    $_SESSION['mdp'] = 'ok';
    header('Location: oui.php');
}



else

{
    die ('Erreur \!');
    header('Location: login.php?step=ERROR');

}*/





?>