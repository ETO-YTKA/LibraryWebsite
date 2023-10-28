<?php
if(isset($_GET['id']))
{
    $conn = mysqli_connect("127.0.0.1", "root", "", "books");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $id = $_GET['id'];

    $query = mysqli_query($conn, "select b.id,t.title, 
        IF(middleName is not null, concat(a.firstName, ' ', a.middleName, ' ', a.lastName), 
            concat(a.firstName, ' ', a.lastName)) as author,
        b.cover,b.description
        from books b
        join authors a on b.authorId = a.id
        join titles t  on b.titleId = t.id
        where b.id = '$id';");

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
            <img src='assets/img/covers/$cover' class='bookCover''>
            <h2>$title</h2>
            <div class='author'>$author</div>
            <div class='description'>$description</div>
        </div>
        ";
    } else {
        header();
    }
}