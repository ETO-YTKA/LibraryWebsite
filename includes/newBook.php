<?php
echo '
<button class="addBook" id="openPopUp"><div class="plus"></div></button>
';

$conn = mysqli_connect("127.0.0.1", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_FILES['newCover']['name']) {
    $path = "assets/img/covers/" . $_FILES["newCover"]["name"];
    move_uploaded_file($_FILES['newCover']['tmp_name'], $path);

    $title = $_POST['newTitle'];
    $author = $_POST['newAuthor'];
    $cover = $_FILES['newCover']['name'];
    $description = $_POST['newDescription'];

    $query = mysqli_query($conn, "insert into books (titleId, authorId, cover, description) values ('$title', '$author', '$cover', '$description')");

    header("Location: index.php");
}

