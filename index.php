<?php
session_start();
include("includes/booksGeneration.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Библиопека</title>
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link rel="stylesheet" href="assets/css/mainStyle.css">
</head>
<body>

    <div class="gridMain">
        <?php include("includes/topBar.php")?>

        <div class="header">
            <div>                
                <h1>Библиотека</h1>
            </div>
            <form method="post" class="searchBar">
                <input type="text" id="search" name="search" placeholder="Поиск">
                <button type="submit" class="searchButton">
                    <img class="" src="assets/img/searchIcon.png" alt="поиск">
                </button>
            </form>

        </div>

        <div class="gridBooks" id="bookGrid">
            <?php
            if ($_SESSION['isAdmin']) {
                include ("includes/newBook.php");
            }

            booksGen('');

            include ("includes/search.php")
            ?>
        </div>

        <div class="popUp" id="popUp">
            <div class="popUpMain">
                <form method="post" enctype="multipart/form-data">
                    <input type="text" id="newTitle" name="newTitle" placeholder="Введите название книги" class="formGroup" required>
                    <input type="text" id="newAuthor" name="newAuthor" placeholder="Введите имя автора" class="formGroup">
                    <input type="file" accept="image/png" id="newCover" name="newCover" placeholder="Загрузите изображение" class="formGroup" required>
                    <textarea id="newDescription" name="newDescription" placeholder="Введите описание" class="formGroup" required></textarea>
                    <button type="submit">Создать</button>
                </form>

                <button id="closePopUp" class="modalClose">&#10006;</button>
            </div>
        </div>

        <script src="assets/js/openPopUp.js"></script>
    </div>

</body>
</html>