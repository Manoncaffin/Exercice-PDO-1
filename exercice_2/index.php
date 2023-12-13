<?php

require_once('./database_connect.php');
var_dump($database);

$request = $database->query('SELECT * FROM shows');

$shows = $request->fetchAll();


var_dump($shows);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>