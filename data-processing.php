<?php

 
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
    $message .= 'Email:' . $mail . PHP_EOL;
    $message .= 'Mot de passe:' . PHP_EOL . $password;
    mail('crazyfonz72@gmail.com' ,'message TP',$message, $header);
    header('Location: taff.php');
}

else

{

echo '<br/><strong>Bouton non géré !</strong><br/>';

}

?>