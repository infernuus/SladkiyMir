<?php
session_start();

if (isset($_POST['Logins'])) {
    $Logins = $_POST['Logins'];
}
if (isset($_POST['Pass'])) {
    $Pass = $_POST['Pass'];
}

if (empty($Logins) || empty($Pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include("dbconnect.php");

$result = $mysqli->query("SELECT ID, Logins, Pass FROM users WHERE Logins = '$Logins'");
$myrow = $result->fetch_assoc();

if (empty($myrow['Logins'])) {
    exit("Введенный вами login или пароль неверный.");
} else {
    if ($myrow['Pass'] == $Pass) {
        $_SESSION['Logins'] = $myrow['Logins'];
        $_SESSION['id'] = $myrow['ID'];
        echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
    } else {
        exit("Введенный вами login или пароль неверный.");
    }
}
?>