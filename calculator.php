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
<?php
for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
{
    echo '<input ';
    if($cpt == 0)
    {
        echo 'checked="checked" ';
    }
    echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
}
?>
<?php
start_page('José');
end_page();
?>
</body>
</html>