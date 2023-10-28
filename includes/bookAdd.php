<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['newTitle'])) {
    $title = $_POST['newTitle'];
    if ($_POST['newAuthorCheck'] == 1) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $middleName = $_POST['middleName'];
    }
    else {

    }
} else {
    $searchCond = '';
}