<?php


session_start();

$log = $_POST['login'];
$mdp = $_POST['mdp'];




if($log == 'Joe' && $mdp =='voiture')
{
    $_SESSION['login'] = 'ok';
    header('Location: oui.php');
}

else

{

    header('Location: login.php?step=ERROR');

}





?>