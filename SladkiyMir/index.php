<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



<div class="mains">
  <div class="presentation">
  <?php
// Запускаем сессию
session_start();
// Подключаем файлы для шапки и меню
include('nav.php');
?>
    <div class="slides">
    <!-- <img class="presentation" src="../img/bg.jpg" alt="bg"> -->
    <div class="hello-mess"><p class="mess">НАШ СЛАДКИЙ МИР - ЭТО НАСТОЯЩИЙ РАЙ ДЛЯ ЛЮБИТЕЛЕЙ СЛАДОСТЕЙ! У НАС ВЫ НАЙДЕТЕ ОГРОМНЫЙ ВЫБОР ВКУСНЕЙШИХ ДЕСЕРТОВ: ОТ КЛАССИЧЕСКИХ ТОРТОВ И ПИРОЖНЫХ ДО ИЗЫСКАННЫХ ШОКОЛАДНЫХ ФИГУРОК И ФРУКТОВЫХ КОМПОЗИЦИЙ. НАШИ КОНДИТЕРЫ ТЩАТЕЛЬНО ПОДХОДЯТ К КАЖДОМУ РЕЦЕПТУ, ИСПОЛЬЗУЯ ТОЛЬКО ЛУЧШИЕ ИНГРЕДИЕНТЫ И СВЕЖИЕ ПРОДУКТЫ.</p></div>
    <img class="slide" src="img/guy.png" alt="guy">
    </div>
  </div>
        <div class="text">
          <h class="headline">НАШИ ЛЮБИМЧИКИ</h>
          <h class="headline-2">
            САМЫЕ ПОПУЛЯРНЫЕ И ВКУСНЫЕ ПОЗИЦИИ ПО МНЕНИЮ ПОКУПАТЕЛЕЙ
          </h>
        </div>
        <div class="cards">
          <div class="card-1">
            <h class="headline1">ПОНЧИКИ</h>
            <p class="paragraph1">
            НАБОР ИЗ 6 ПОНЧИКОВ В ШОКОЛАДНОЙ ГЛАЗУРИ С КЛУБНИЧНОЙ И КАРАМЕЛЬНОЙ НАЧИНКАМИ 
            </p>
          </div>
          <div class="card-2">
            <h class="headline2">ПИРОЖНЫЕ</h>
            <p class="paragraph2">
            ПИРОЖНОЕ “БРАУНИ” С ЛЕСНЫМ ОРЕХОМ МАЛИНОВЫМ И ГРУШЕВЫМ КОНФИТЮРОМ
              2 ШТУКИ
            </p>
          </div>
          <div class="card-3">
            <h class="headline3">КЛУБНИКА В ШОКОЛАДЕ</h>
            <p class="paragraph3">
            НАБОР “АВРОРА” ИЗ 12 СОЧНЫХ КЛУБНИК В БЕЛОМ И МОЛОЧНОМ ШОКОЛАДЕ
            </p>
          </div>
        </div>

      </div>
      <div class="main">
        <div class="qaa">
          <div class="headline-qaa">
            <h class="headline"></h>
            <div class="topings"></div>
          </div>
        </div>
        <div class="actions">
        <a class="button-actions" href="actions.php"> </a>
            </div>
        <div class="sales-actions" href="sales.php"> </div>

<?php
//подключаем файл для подвала
include('footer.php');
?>
</body>

</html>