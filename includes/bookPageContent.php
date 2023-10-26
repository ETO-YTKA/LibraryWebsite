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
        <div class='header'>
            <h1>$title</h1>
        </div>
    
        <div class='main'>
            <img src='assets/img/$cover' class='bookCover''>
            <h2>$title   </h2>
            <div class='author'>$author</div>
            <div class='description'>$description</div>
        </div>
        ";
    } else {
        header();
    }
}