<?php
function booksGen($searchCond): void
{
    $conn = mysqli_connect("127.0.0.1", "root", "", "books");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query =mysqli_query($conn, "select b.id,t.title,
        IF(middleName is not null, CONCAT(SUBSTRING(firstName, 1, 1), '. ', SUBSTRING(middleName, 1, 1), '. ', lastName),
          CONCAT(SUBSTRING(firstName, 1, 1), '. ', lastName)) as author,
        b.cover,b.description
        from books b
        join authors a on b.authorId = a.id
        join titles t  on b.titleId = t.id
        where title like '%$searchCond%' or lastName like '%$searchCond%'");

    $_POST['numResult'] = mysqli_num_rows($query);
    foreach ($query as $row) {
        $id = $row['id'];
        $title = $row['title'];
        $author = $row['author'];
        $cover = $row['cover'];

        echo "
        <div class='bookCard'>
            <a href='bookPage.php?id=$id' class='bookCardContent'>
                <img src='assets/img/covers/$cover' class='coverPreview' alt=$title>
                <h2>$title</h2>
                <p>$author</p>
            </a>
        </div>
              ";
    }
}
