<?php
$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['search'])) {
    echo '<script src="../assets/js/removeBookGridChild.js"></script>';
    if ($_SESSION['isAdmin']) {
        include ("includes/newBook.php");
    }
    $search = $_POST['search'];
    booksGen($search);
}