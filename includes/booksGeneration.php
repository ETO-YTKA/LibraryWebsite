<?php
function booksGen($searchCond = '') {
    $conn = mysqli_connect("localhost", "root", "", "books");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query =mysqli_query($conn, "SELECT * FROM books where title like '%$searchCond%'");
    foreach ($query as $row) {
        $id = $row['id'];
        $title = $row['title'];
        $author = $row['author'];
        $cover = $row['cover'];

        echo "
        <div class='bookCard'>
            <a href='bookPage.php?title=$id' class='bookCardContent'>
                <img src='assets/img/$cover' class='coverPreview' alt=$title>
                <h2>$title</h2>
                <p>$author</p>
            </a>
        </div>
              ";
    }
}
