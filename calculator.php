<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
function end_page()
{
    echo '</body>' ;
};

?>

<?php
$operateurs = '*+-/';
?>

<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="calcul.php">
    <input type="text" id="op1"><br/>
    <input type="text" id="op2"><br/>
    <input checked="checked" type="radio" name="op" value="*"/>*<br/>
    <input type="submit" name="action" value="*"/>+<br/>
    <input type="submit" name="action" value="+"/>+<br/>
    <input type="submit" name="action" value="-"/>-<br/>
    <input type="submit" name="action" value="/"/>/<br/>
    <input type="submit" name="action"><br/>
    <input type="reset" value="supprimer le formulaire"><br/>


</form>
start_page('José');
end_page();
?>
</body>
</html>