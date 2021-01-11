<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
    <link rel="shortcut icon" href="#">

    <?php
        include "data.php"
    ?>

</head>
<body>
    
<div id="app">
        
            <?php

            foreach ($database as $k => $databases) { ?>
            <div class="container"> 
            <div class="blocks">
            <img src="<?php echo $databases["poster"]?>" alt="">
            <?php
                echo $databases["title"]. "<br>";
                echo $databases["author"]. "<br>";
                echo $databases["year"]. "<br>";
             ?>
             </div>
             </div>
             <?php
            }

            ?>
             
</div>




    <script src="script.js"></script>
</body>
</html>