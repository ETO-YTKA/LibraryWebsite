<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($conn, "select id, 
        IF(middleName is not null, CONCAT(SUBSTRING(firstName, 1, 1), '. ', SUBSTRING(middleName, 1, 1), '. ', lastName),
        CONCAT(SUBSTRING(firstName, 1, 1), '. ', lastName)) as author
    from authors");

foreach ($query as $row) {
    $id = $row['id'];
    $author = $row['author'];

    echo "
    <option value='$id'>$author</option>
    ";
}