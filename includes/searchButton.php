<?php
if (isset($_GET['search'])) {
    header("Location: ../index.php");
    echo '<script src="../assets/js/removeBookGridChild.js"></script>';
    if (isset($_SESSION['isAdmin'])) {
        if ($_SESSION['isAdmin']) {
            include("includes/bookAddButton.php");
        }
    }
    $search = trim($_GET['search']);
    booksGen($search);
}