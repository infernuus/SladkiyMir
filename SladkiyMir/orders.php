<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include ('nav_admin.php');
?>
<main class="orders">
    <label>ЗАКАЗЫ</label>
    <div class="input-l">
        <div class="input-l-l">
            <p class="input-labell"><b>ИМЯ</b></p>
            <p class="input-labell"><b>ТЕЛЕФОН</b></p>
            <p class="input-labell"><b>АДРЕС</b></p>
            <p class="input-labell"><b>ПРОДУКТЫ</b></p>
            <p class="input-labell"><b>ОБЩАЯ СУММА ПОКУПКИ</b></p>
            <p class="input-labell"><b>ОБЩЕЕ КОЛИЧЕСТВО</b></p>
            <p class="input-labell"><b>СТАТУС ЗАКАЗА</b></p>
            <p class="input-labell"><b>УДАЛИТЬ</b></p>
        </div>
    </div>
    <?php
    include ("dbconnect.php");
    $label = 'id';
    $id = false;
    if (!empty($_GET[$label])) {
        $id = $_GET[$label];
    }
    $result = $mysqli->query
    ("SELECT * FROM orders WHERE id ='$id'");
    $result = mysqli_query($mysqli, "SELECT * FROM orders");
    $div = "<div class='cards'>";
    $k = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $div .= '<div class="input-l">';
        $div .= '<div class="input-l-l">';
        $id = $row['id'];
        $div .= '<p class="input-labell">' . $row['Logins'] . '</p>';
        $div .= '<p class="input-labell">' . $row['Phones'] . '</p>';
        $div .= '<p class="input-labell">' . $row['Adress'] . '</p>';
        $div .= '<p class="input-labell">' . $row['products'] . '</p>';
        $div .= '<p class="input-labell">' . $row['totalPrice'] . '</p>';
        $div .= '<p class="input-labell">' . $row['totalQuantity'] . '</p>';
        $div .= '<p class="input-labell"><select class="select-opt1" name="" id="">
        <option value="Выполнен">Выполнен</option>
        <option value="Отменен">Отменен</option>
    </select></p>';
        $div .= ' <form class="delete_btn" action="orders.php" method="post">
        <p class="input-labell"><input type="hidden" name="delete_btn" value="1">
                <button type="submit">Удалить</button></p>
            </form>';
        $div .= '</div>';

        $div .= '</div>';

        $k++;


    }
    
    if (isset($_POST['delete_btn'])) {
        $sql = "DELETE FROM orders WHERE id = '$id'";
        $id = $_POST['id'];
        if ($mysqli->query($sql)) {
            echo "Запись успешно удалена";
        } else {
            echo "Ошибка при удаление заказа! ";
        }
    }
    $div .= '</div>';
    echo $div;
    ?>

</main>
<!-- DELETE FROM orders.id WHERE id ='$id'  -->