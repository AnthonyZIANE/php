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
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op = $_POST['op'];
?>
<?php
if('*' == $op)
{
}
elseif('+' == $op)
{
}
else
{
echo '<br/><strong>opérateur ' . $op . ' non géré </strong>';
}
?>
<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
start_page('José');
end_page();
?>
</body>
</html>