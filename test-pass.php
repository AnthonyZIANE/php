<?php

$log = $_POST['Login'];
$mdp = $_POST['Mot De Passe'];




if($log == 'login' && $mdp =='mdp')
{
    header('Location: accueil.php');
}

else

{

    header('Location: fail.php');;

}





?>