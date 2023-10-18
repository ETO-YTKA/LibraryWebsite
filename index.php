<?php
session_start();
?>
<?php require_once("includes/connection.php"); ?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Библиопека</title>
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link href="https://db.onlinewebfonts.com/c/9b424ab5e96ee96f675c922ff9c6aff3?family=Dodo+Rounded" rel="stylesheet">
</head>
<body>

    <div class="gridMain">
        <?php include("includes/topBar.php")?>

        <div class="header">
            <div>                
                <h1>Библиопека</h1>  
            </div>           
            <input type="text" id="search" placeholder="Поиск">     
        </div>

        <div class="gridBooks" id="bookGrid">

            <?php include("includes/booksGeneration.php") ?>

        </div>
    </div>

</body>
</html>