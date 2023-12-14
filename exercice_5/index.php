<?php

require_once('./database_connect.php');
// var_dump($database);

$request = $database->query('SELECT * FROM clients WHERE lastName LIKE "m%" ORDER BY lastName');


$clientsWithM = $request->fetchAll();

// var_dump($clientsWithM);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Clients dont le nom commence par un "m":</h2>
<ul>
<?php
    foreach($clientsWithM as $client){
        echo '<li>' . $client["firstName"] . ' ' . $client["lastName"] . '</li>';
    }
?>
</body>
</html>