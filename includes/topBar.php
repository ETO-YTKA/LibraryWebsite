<div class="topBar">
    <a href="index.php"><img class="homeIcon" src="assets/img/homeIcon.png" alt="Главная"></a>

    <?php
    if (!empty($_SESSION['firstName'])) {echo "
        <div class='topBarMenu'>
            <a>Здравствуйте, <span>" . $_SESSION['firstName'] . "</span>!</a>
            <form style='margin: 0' method='post'>
                <input type='radio' style='display: none' name='logout' value='1' checked>
                <button type='submit' class='logoutButton' onclick=''>выйти</button>
            </form>
            
        </div>";
        include "includes/userLogout.php";
    }
    else {
        echo "<a href='loginPage.php'>Войти</a>";
    }
    ?>
</div>