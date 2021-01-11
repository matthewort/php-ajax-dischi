<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="#">
    
    <?php
        include "data.php"
    ?>



</head>
<body>

<div class="container"> 
    <?php foreach ($database as $k => $databases) { ?>    
            <div class="blocks">
                <img src="<?php echo $databases["poster"]?>" alt="">
                <h1><?php echo $databases["title"]?></h1>
                <p><?php echo $databases["author"]?></p>
                <p><?php echo $databases["year"]?></p>
            </div>
    <?php } ?>
</div>


</body>
</html>