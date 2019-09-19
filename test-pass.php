<?php

$log = $_POST['login'];
$mdp = $_POST['mdp'];




if($log == 'login' && $mdp =='mdp')
{
    header('Location: oui.php');
}

else

{

    header('Location: fail.php');

}





?>