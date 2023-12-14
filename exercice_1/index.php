<?php

require_once('./database_connect.php');
var_dump($database);

$request = $database->query('SELECT * FROM clients');

$clients = $request->fetchAll();

var_dump($clients);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Tous les clients :</h2>
<ul>
<?php
    foreach($clients as $client){
        echo '<li>' . $client["firstname"] . ' ' . $client["lastname"] . '</li>'
    }
?>
</ul>

</body>
</html>

