<?php session_start();?>
<?php require_once("includes/userLogin.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="assets/css/regAndLoginPages.css">
    <link rel="stylesheet" href="assets/css/mainStyle.css">
    <link href="https://db.onlinewebfonts.com/c/9b424ab5e96ee96f675c922ff9c6aff3?family=Dodo+Rounded" rel="stylesheet">
</head>
<body>

    <?php include("includes/topBar.php")?>
    <div class="container">
        <h1>Вход</h1>
        <form id="loginForm" name="loginForm" action="" method="post">
            <input type="text" id="login" name="login" placeholder="Введите логин" class="formGroup" required>
            <input type="password" id="password" name="password" placeholder="Введите пароль" class="formGroup" required>
            <a href="registrationPage.php" class="linkToReg">Зарегистрироваться</a>
            <button type="submit">Войти</button>
        </form>
    </div>

</body>
</html>