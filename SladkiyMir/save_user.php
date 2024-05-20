<?php
session_start();
?>
<?php
if (isset($_POST['Names'])) {
    $Names = $_POST['Names'];
}
if (isset($_POST['Surname'])) {
    $Surname = $_POST['Surname'];
}
if (isset($_POST['Email'])) {
    $Email = $_POST['Email'];
}
if (isset($_POST['Phone'])) {
    $Phone = $_POST['Phone'];
}
if (isset($_POST['Logins'])) {
    $Logins = $_POST['Logins'];
}
if (isset($_POST['Pass'])) {
    $Pass = $_POST['Pass'];
}

if (empty($Logins) or empty($Pass)) {
    exit("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

include("dbconnect.php");


$result2 = $mysqli->query("INSERT INTO users (Names, Surname, Email, Phone, Logins, Pass) VALUES('$Names','$Surname','$Email','$Phone','$Logins','$Pass')");
if ($result2 === TRUE) {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт под своим именем. <a href='index.php'>Главная страница</a>";
} else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>