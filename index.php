<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>
<?php
start_page('YASS');
?>

<?php
$jour = date('d/m/Y', strtotime('2020-04-01'));
?>
<?php
$jour = date1('d/m/Y');
?>
<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

</body>
</html>