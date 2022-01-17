

<?php

require_once __DIR__ . '/database.php';
require_once __DIR__ . '/logic.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
       
       <?php foreach($Movies as $Movie): 
        
        $newMovi = new Movie($Movie['title'], $Movie['description'], $Movie['age'])
        
        ?>
        <h2><?php echo $Movie['title'] ?></h2>
        <div><?php echo $Movie['description'] ?></div>
        <div><?php echo $Movie['age'] ?></div>
       <?php endforeach; ?>
</body>
</html>