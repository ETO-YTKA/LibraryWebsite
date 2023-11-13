<?php session_start();?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/regAndLoginPages.css">
    <link rel="stylesheet" href="assets/css/mainStyle.css">
</head>
<body>

    <?php include("includes/header.php") ?>
    <div class="mainContent">
        <div class="container">
            <h1>Регистрация</h1>
            <form action="includes/userRegistration.php" method="POST" class="form">
                <input type="text" id="firstName" name="firstName" placeholder="Введите имя" class="formGroup" required>
                <input type="text" id="lastName" name="lastName" placeholder="Введите фамилию" class="formGroup" required>
                <input type="text" id="middleName" name="middleName" placeholder="Введите отчество" class="formGroup" required>
                <input type="text" id="login" name="login" placeholder="Введите логин" class="formGroup" required>
                <input type="password" id="password" name="password" placeholder="Введите пароль" class="formGroup" required>
                <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Повторите пароль" class="formGroup" required>
                <button id="submitButton" class="invisible">Зарегистрироваться</button>
            </form>
            <button id="regButton">Зарегистрироваться</button>
        </div>
    </div>

    <script src="assets/js/regValidation.js"></script>
</body>
</html>