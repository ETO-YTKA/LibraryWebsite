<div class="header">
    <a href="index.php"><h3>Библиотека</h3></a>

    <form method="post" class="searchBar">
        <input type="text" id="search" name="search" placeholder="Поиск">
        <button type="submit" class="searchButton" id="searchButton">
            <img class="" src="assets/img/searchIcon.png" alt="поиск">
        </button>
    </form>

    <?php
    if (!empty($_SESSION['firstName'])) {echo "
        <div class='HeaderMenu'>
            <a>Здравствуйте, <span>" . $_SESSION['firstName'] . "</span>!</a>        
            <a href='includes/logout.php'>Выход</a>   
        </div>";
    }
    else {
        echo "<a href='loginPage.php' class='account'>Войти</a>";
    }
    ?>
</div>