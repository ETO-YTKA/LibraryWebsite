<div class="topBar">
    <a href="index.php"><img class="homeIcon" src="assets/img/homeIcon.png" alt="Главная"></a>
    <?php
    if (!empty($_COOKIE['firstName'])) {
        echo "<a href='loginPage.php'>Здравствуйте, <span>" . $_COOKIE['firstName'] . "</span>!</a>";
    }
    else {
        echo "<a href='loginPage.php'>Войти</a>";
    }
    ?>
</div>