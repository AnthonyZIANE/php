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
echo date1('l F d, Y');
?>
<?php
$jour = date2('l F d, Y');
?>
<?php
$jour = date('d/m/Y', strtotime('2020-04-01'));
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