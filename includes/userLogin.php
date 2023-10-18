<?php
global $con;

if (isset($_POST["login"])) {
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);

        $query = mysqli_query($con, "SELECT * FROM users WHERE login='$login'");
        $numRows = mysqli_num_rows($query);
        if ($numRows != 0) {
            $row = mysqli_fetch_assoc($query);
            $dbPassword = $row['password'];

            if (password_verify($password, $dbPassword)) {
                $firstName = $row['firstName'];
                setcookie("firstName", $firstName);
                header("Location: index.php");
            }
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "All fields are required!";
    }
}
