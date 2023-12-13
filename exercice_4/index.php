<?php

require_once('./database_connect.php');
var_dump($database);

$request = $database->query('SELECT * FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber where cardTypesId=1');

$cards = $request->fetchAll();

var_dump($cards);


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