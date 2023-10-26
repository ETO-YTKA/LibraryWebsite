<?php
if(isset($_GET['id']))
{
    $conn = mysqli_connect("localhost", "root", "", "books");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM books WHERE id='$id'");
    $numRows = mysqli_num_rows($query);
    if ($numRows != 0) {
        $row = mysqli_fetch_assoc($query);
        $title = $row['title'];
        $author = $row['author'];
        $cover = $row['cover'];
        $description = $row['description'];

        echo "
        <html>
        <head>
            <meta charset='UTF-8''>
            <title>$title</title>
            <link rel='stylesheet' href='assets/css/bookPageStyle.css'>
            <link rel='stylesheet' href='assets/css/mainStyle.css'>
            <link href='https://db.onlinewebfonts.com/c/9b424ab5e96ee96f675c922ff9c6aff3?family=Dodo+Rounded' rel='stylesheet'>
        </head>
        <body>
            <?php include('includes/topBar.php')?>
        
            <div class='header'>
                <h1>$title</h1>
            </div>
        
            <div class='main'>
                <img src='assets/img/$cover' class='bookCover''>
                <h2>$title   </h2>
                <div class='author'>$author</div>
                <div class='description'>$description</div>
            </div>
        </body>
        </html>
        ";
    } else {
        header();
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/bookPageStyle.css">
    <link rel="stylesheet" href="assets/css/mainStyle.css">
    <link href="https://db.onlinewebfonts.com/c/9b424ab5e96ee96f675c922ff9c6aff3?family=Dodo+Rounded" rel="stylesheet">
</head>
<body>
    <?php include("includes/topBar.php")?>

    <div class="header">
        <h1></h1>
    </div>

    <div class="main">
        <img src="assets/img/" class="bookCover">
        <h2></h2>
        <div class="author"></div>
        <div class="description"></div>
    </div>
</body>
</html>