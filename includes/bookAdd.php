<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['newTitle'])) {
    // Добавление новой книги
    $title = $_POST['newTitle'];
    $sql = "INSERT INTO titles (title) VALUES ('$title')";
    mysqli_query($conn, $sql);
    // Получение id добавленной книги
    $query = mysqli_query($conn, "select id from titles where title = '$title'");
    $row = mysqli_fetch_assoc($query);
    $titleId = $row['id'];
    // Добавление обложки
    $cover = $_FILES['newCover']['name'];
    $path = "assets/img/covers/" . $_FILES["newCover"]["name"];
    move_uploaded_file($_FILES['newCover']['tmp_name'], $path);

    $description = $_POST['newDescription'];
    // Добавление нового автора, Добавление нового автора без отчества или выбор существующего
    if (!empty($_POST['newFirstName'] && !empty($_POST['newMiddleName']))) {
        $firstName = $_POST['newFirstName'];
        $lastName = $_POST['newLastName'];
        $middleName = $_POST['newMiddleName'];

        $sql = "INSERT INTO authors (firstName, lastName, middleName) VALUES ('$firstName', '$lastName', '$middleName')";
        mysqli_query($conn, $sql);

        $query = mysqli_query($conn, "select id from authors where firstName = '$firstName' and lastName = '$lastName' and middleName = '$middleName'");
        $row = mysqli_fetch_assoc($query);
        $authorId = $row['id'];

        $query = mysqli_query($conn, "insert into books (titleId, authorId, cover, description) values ('$titleId', '$authorId', '$cover', '$description')");
        header("Location: index.php");
    }
    else if (empty($_POST['newMiddleName'])) {
        $firstName = $_POST['newFirstName'];
        $lastName = $_POST['newLastName'];

        $sql = "INSERT INTO authors (firstName, lastName) VALUES ('$firstName', '$lastName')";
        mysqli_query($conn, $sql);

        $query = mysqli_query($conn, "select id from authors where firstName = '$firstName' and lastName = '$lastName'");
        $row = mysqli_fetch_assoc($query);
        $authorId = $row['id'];

        $query = mysqli_query($conn, "insert into books (titleId, authorId, cover, description) values ('$titleId', '$authorId', '$cover', '$description')");
        header("Location: index.php");
    }
    else {
        $author = $_POST['newAuthor'];

        $query = mysqli_query($conn, "insert into books (titleId, authorId, cover, description) values ('$titleId', '$author', '$cover', '$description')");
        header("Location: index.php");
    }
}

