<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$login = $_POST['login'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$conn = mysqli_connect("127.0.0.1", "root", "", "books");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$userCheck = mysqli_query($conn, "SELECT * FROM users WHERE login='$login'");
if (mysqli_num_rows($userCheck) > 0) {
    die("Пользователь с таким логином уже существует");
}

$sql = "INSERT INTO users (firstName, lastName, middleName, login, password) VALUES ('$firstName', '$lastName', '$middleName', '$login', '$password')";
if(mysqli_query($conn, $sql)){
    header("Location: /loginPage.php");
} else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
