<?php

$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!empty($_POST['search'])) {
    $search = $_POST['search'];

    booksGen($search);
}