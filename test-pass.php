<?php

$log = $_POST['Login'];
$mdp = $_POST['Mot De Passe'];




if($log == 'login' && $mdp =='mdp')
{
    header('Location: page2.php');
}

else

{

    echo '<br/><strong>Bouton non géré !</strong><br/>';

}





?>