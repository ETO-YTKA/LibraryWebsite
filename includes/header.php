<div class="header">
    <a href="index.php"><h3>Библиотека</h3></a>

    <form method="get" class="searchBar" action="index.php">
        <input type="text" name="search" placeholder="Поиск">
        <button type="submit" class="searchButton">
            <img class="" src="assets/img/searchIcon.png" alt="поиск">
        </button>
    </form>

    <?php
    if (!empty($_SESSION['firstName'])) {echo "
        <div class='HeaderMenu'>
            <a href='includes/logout.php' class='account'>Выход</a>   
        </div>";
    }
    else {
        echo "<a href='loginPage.php' class='account'>Войти</a>";
    }
    ?>
</div>