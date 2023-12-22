<?php
session_start();
include ("includes/booksGeneration.php");
include ("includes/bookAdd.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Библиотека</title>
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link rel="stylesheet" href="assets/css/mainStyle.css">
</head>
<body>
    <?php include("includes/header.php") ?>

<!--    <div class="mainContent searchResult" id="searchResult">По запросу "" найдено: результатов</div>-->
    <?php
    include("includes/searchResult.php");
    searchResult();
    ?>
    <div class="gridBooks" id="bookGrid">
        <?php
        if (isset($_SESSION['isAdmin'])) {
            if ($_SESSION['isAdmin']) {
                include("includes/bookAddButton.php");
            }
        }

        booksGen('');

        include("includes/searchButton.php")
        ?>
    </div>

    <div class="popUp" id="popUp">
            <div class="popUpMain">
                <form enctype="multipart/form-data" method="post" class="formContainer">
                    <input type="text" name="newTitle" placeholder="Введите название книги" class="formGroup" required>

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

                    <input type="file" accept="image/webp" name="newCover" class="formGroup" required>
                    <textarea name="newDescription" placeholder="Введите описание" class="formGroup" required></textarea>
                    <button type="submit" class="popUpButton">Создать</button>
                </form>

                <button id="closePopUp" class="modalClose">&#10006;</button>
            </div>
    </div>
    <script src="assets/js/openPopUp.js"></script>
    <script src="assets/js/newAuthorCheckBox.js"></script>
</body>
</html>