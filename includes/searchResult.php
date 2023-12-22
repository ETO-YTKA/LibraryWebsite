<?php
function searchResult(): Void {
    $conn = mysqli_connect("127.0.0.1", "root", "", "books");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (empty($_GET['search'])) {
        $_GET['search'] = "";
    }
    $searchCond = trim($_GET['search']);

    $query =mysqli_query($conn, "select b.id,t.title,
        IF(middleName is not null, CONCAT(SUBSTRING(firstName, 1, 1), '. ', SUBSTRING(middleName, 1, 1), '. ', lastName),
          CONCAT(SUBSTRING(firstName, 1, 1), '. ', lastName)) as author,
        b.cover,b.description
        from books b
        join authors a on b.authorId = a.id
        join titles t  on b.titleId = t.id
        where title like '%$searchCond%' or lastName like '%$searchCond%'");

    echo mysqli_num_rows($query);

    if (!empty($_GET['search'])) {

        echo '<div class="mainContent searchResult" id="searchResult">По запросу "' . $_GET['search'] . '" найдено: ' . mysqli_num_rows($query) . ' результатов</div>';
    }
    else {
        echo '<div class="mainContent searchResult" id="searchResult">Всего книг: ' . mysqli_num_rows($query) . '</div>';
    }
}