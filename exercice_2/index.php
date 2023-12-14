<?php

require_once('./database_connect.php');
// var_dump($database);

$request = $database->query('SELECT type FROM showTypes');

$showTypes = $request->fetchAll();


var_dump($showTypes);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tous les types de spectacle :</h2>
<ul>
<?php
    foreach($showTypes as $showTypes){
        echo '<li>' . $showTypes["type"] .'</li>';
    }
?>
</ul>
</body>
</html>