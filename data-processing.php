<?php

$dbLink = mysqli_connect( 'mysql-anthonyziane.alwaysdata.net','189623', 'Voiture123')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , 'anthonyziane_tp2')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);


//$today = date('Y-m-d');

//$query = ('INSERT INTO user(id, username, datasse, pays, sex, mdp, tel, mail) VALUES(1, \'Joe\', NOW(), \'France\', \'Homme\', \'voiture\', \'061571045\', \'anthony@gmail.com\' )');
//
//if(!($dbResult = mysqli_query($dbLink, $query)))
//{
//    echo 'Erreur dans requête<br />';
//// Affiche le type d'erreur.
//    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
//// Affiche la requête envoyée.
//    echo 'Requête : ' . $query . '<br/>';
//    echo 'Bonjour, Joé
//Votre inscription a bien été enregistrée merci.' . '<br />';
//    exit();
//}



 
$ide = $_POST['Identifiant'];
$homme = $_POST['H'];
$femme = $_POST['F'];
$EM = $_POST['E-mail'];
$mdp = $_POST['Mot de passe'];
$remdp = $_POST['Vérification du mot de passe'];
$tel = $_POST['Téléphone'];
$pays = $_POST['Pays'];
$conditions = $_POST['Conditions générales'];
$action = $_POST['action'];

if($action == 'rec')
{

	$message = 'Voici vos identifiants d\'inscription:' . $ide .PHP_EOL;
    $message .= 'Email:' . $EM . PHP_EOL;
    $message .= 'Mot de passe:' . PHP_EOL . $mdp;
    //mail('crazyfonz72@gmail.com' ,'message TP',$message);
    //header('Location: taff.php');

}

else

{

echo '<br/><strong>Bouton non géré !</strong><br/>';

}
//
//$action1 = $_POST['action1'];
//$action = $_POST['action'];
//$EM = $_POST['E-mail'];
//$ide = $_POST['Identifiant'];
//
//if($action1 == 'mailer')
//{
//    echo 'OK' . PHP_EOL;
//
//}
//
//elseif ($action == 'rec')
//{
//    echo 'Beaucoup mieux !' . PHP_EOL;
//}
//
//else
//{
//    echo PHP_EOL . 'Bouton non géré \!' . PHP_EOL;
//}
//
//
///*$file='data.txt';
//if(!($file = fopen($file, 'a+')))
//{
//    echo 'Erreur';
//    exit();
//}
//
//
//
//
//
//
//fputs($file,'id :' .$ide . ' email :' . $EM . PHP_EOL);
//
//fclose($file);*/
//
//$file ='data.txt';
//if(!($file = fopen($file, 'r')))
//{
//    echo 'Erreur';
//    exit();
//}
//
//echo 'Liste des utilisateurs : ' . PHP_EOL;
//$cpt = 1;
//while ($line = fgets($file , 255))
//{
//    echo 'Utilisateur n' . $cpt . ' : ' . $line . PHP_EOL;
//    ++ $cpt;
//}
//
//
//fclose($file);



?>