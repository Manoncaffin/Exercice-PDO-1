<?php

require_once('./database_connect.php');
// var_dump($database);

$request = $database->query('SELECT title, performer, date, startTime FROM shows ORDER BY title ASC');

$infosShows = $request->fetchAll();

// var_dump($shows);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Tous les spectacles :</h2>
<ul>
<?php
    foreach($infosShows as $show){
        echo '<li>' . $show["title"] . ' par ' . $show["performer"] . ' le ' . $show["date"] . ' à ' . $show["startTime"] . '</li>';
    }
?>
</body>
</html>