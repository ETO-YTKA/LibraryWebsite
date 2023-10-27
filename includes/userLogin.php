<?php
$conn = mysqli_connect("localhost", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["login"])) {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);

        $query = mysqli_query($conn, "SELECT * FROM users WHERE login='$login'");
        $numRows = mysqli_num_rows($query);
        if ($numRows != 0) {
            $row = mysqli_fetch_assoc($query);
            $dbPassword = $row['password'];

            if (password_verify($password, $dbPassword)) {
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['isAdmin'] =  boolval($row['admin']);
                header("Location: index.php");
            }
        } else {
            header();
        }
    } else {
        echo "All fields are required!";
    }
}
