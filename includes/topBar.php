<div class="topBar">
    <a href="index.php"><img class="homeIcon" src="assets/img/homeIcon.png" alt="Главная"></a>

    <?php
    if (!empty($_SESSION['firstName'])) {echo "
        <div class='topBarMenu'>
            <a>Здравствуйте, <span>" . $_SESSION['firstName'] . "</span>!</a>        
            <a href='includes/logout.php'>Выход</a>   
        </div>";
    }
    else {
        echo "<a href='loginPage.php'>Войти</a>";
    }
    ?>
</div>