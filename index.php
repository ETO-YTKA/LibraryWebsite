<?php
session_start();
include("includes/booksGeneration.php");
include ("includes/bookAdd.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Библиотека</title>
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
            if (isset($_SESSION['isAdmin'])) {
                if ($_SESSION['isAdmin']) {
                    include("includes/bookAddButton.php");
                }
            }

            booksGen('');

            include ("includes/search.php")
            ?>
        </div>

    <div class="popUp" id="popUp">
            <div class="popUpMain">
                <form enctype="multipart/form-data" method="post" class="formContainer">
                    <input type="text" id="newTitle" name="newTitle" placeholder="Введите название книги" class="formGroup" required>

                    <select id="newAuthor" name="newAuthor" class="authorSelect" required>
                        <?php include("includes/selectOptions.php") ?>
                    </select>

                    <input type="text" id="newFirstName" name="newFirstName" class="formAuthor" placeholder="Введите имя автора">
                    <input type="text" id="newLastName" name="newLastName" class="formAuthor" placeholder="Введите фамилию автора">
                    <input type="text" id="newMiddleName" name="newMiddleName" class="formAuthor" placeholder="Введите отчество автора (если имеется)">

                    <div class="authorCheckBox">
                        <input type="checkbox" id="newAuthorCheck" name="newAuthorCheck" value="1">
                        <label for="newAuthorCheck">новый автор</label>
                    </div>

                    <input type="file" accept="image/webp" id="newCover" name="newCover" class="formGroup" required>
                    <textarea id="newDescription" name="newDescription" placeholder="Введите описание" class="formGroup" required></textarea>
                    <button type="submit" class="popUpButton">Создать</button>
                </form>

                <button id="closePopUp" class="modalClose">&#10006;</button>
            </div>
        </div>
        <script src="assets/js/openPopUp.js"></script>
        <script src="assets/js/newAuthorCheckBox.js"></script>
    </div>

</body>
</html>