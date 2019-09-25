<?php

$aa = 'Page 1';
$aaa= 'calcul.php';

$bb = 'Page 2';
$bbb = 'login.php';


?>



<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TD3</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<ul id="menu">

    <li><a href="<?php echo $aaa;?>"><?php echo $aa;?></a></li>
    <li><a href="<?php echo $bbb;?>"><?php echo $bb;?></a></li>


</ul>



</body>
</html>
