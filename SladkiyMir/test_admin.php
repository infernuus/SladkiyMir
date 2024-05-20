<?php
session_start();

if (isset($_POST['Emails'])) {
    $Emails = $_POST['Emails'];
}
if (isset($_POST['Pass'])) {
    $Pass = $_POST['Pass'];
}

if (empty($Emails) || empty($Pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include ("dbconnect.php");

$result = $mysqli->query("SELECT ID, Emails, Pass FROM admins WHERE Emails = '$Emails'");
$myrow = $result->fetch_assoc();

if (empty($myrow['Emails'])) {
    exit("Введенный вами имя или пароль неверный.");
} else {
    if ($myrow['Pass'] == $Pass) {
        $_SESSION['Emails'] = $myrow['Emails'];
        $_SESSION['id'] = $myrow['ID'];
        // header("location: orders.php");
        echo 'Здравствуйте, администратор ' . $Emails . ', вы можете перейти к заказам! 
        <a href="orders.php">Если не произошёл автоматический перенос, нажмите здесь</a>';
        header("Refresh:1; url=orders.php");
        exit;
    } else {
        exit("Введенный вами имя или пароль неверный.");
    }
}
?>