<?php
global $con;

$query =mysqli_query($con, "SELECT * FROM books");
foreach ($query as $row) {
    $title = $row['title'];
    $author = $row['author'];
    $cover = $row['cover'];

    echo "
        <div class='bookCard'>
            <a href='bookPage.php?title=$title' class='bookCardContent'>
                <img src='assets/img/$cover' class='coverPreview'>
                <h2>$title</h2>
                <p>$author</p>
            </a>
        </div>
              ";
}