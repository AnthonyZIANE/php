<?php

$log = $_POST['login'];
$mdp = $_POST['mdp'];




if($log == 'joe' && $mdp =='yes')
{
    header('Location: oui.php');
}

else

{

    header('Location: fail.php');

}





?>