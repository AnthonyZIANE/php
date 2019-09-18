<?php

$dbLink = mysqli_connect( mysql-anthonyziane.alwaysdata.net, 189623, -Maseille1313- )
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

mysqli_select_db($dbLink , user)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);


 
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

if($action == 'mailer')
{
	
	$message = 'Voici vos identifiants d\'inscription:' . $ide .PHP_EOL;
    $message .= 'Email:' . $EM . PHP_EOL;
    $message .= 'Mot de passe:' . PHP_EOL . $mdp;
    mail('crazyfonz72@gmail.com' ,'message TP',$message);
    header('Location: taff.php');
}

else

{

echo '<br/><strong>Bouton non géré !</strong><br/>';

}

?>