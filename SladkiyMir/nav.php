<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width,
initial-scale = 1, shrink-to-fit = no">
  <!-- Стиль bootstrap -->

  <!-- Собственный стиль -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/animate.css">
  <title>Сладкий мир</title>
</head>

<body>
  <div class="h-header">
    <div class="header-content">
      <div id="menu">
        <a class="button icon" href="index.php"><img class="icon" src="img/icon.png" alt="">
        </a>
        <ul class="nav">
          <li>
            <a class="button" href="actions.php">
              АКЦИИ
            </a>
          </li>
          <li>
            <a class="button" href="menu.php">
              МЕНЮ
            </a>
          </li>

          <li>
            <a class="button" href="cart.php">
              ОПЛАТА
            </a>
          </li>
          <li>
            <a href="#contact-window">
              КОНТАКТЫ
            </a>
          </li>
          <li>
            <a href="#contact-window">
              +7 (987) 94 90
            </a>
          </li>
          <?php
          // Проверяем, пусты ли переменные логина и id пользователя
          if (empty($_SESSION['id'])) {
            if (empty($_SESSION['Logins']) or empty($_SESSION['id'])) {
              ?>
              <li class="SignUp">
                <a class="button" href="registr.php">SIGN UP</a>
              </li>
              <?php
            } elseif (empty($_SESSION['Emails'])) { ?>
              <li class="SignUp">
                <a class="button" href="registr.php">SIGN UP</a>
              </li>
            <?php } ?>
            <?php
          } else {
            ?>
            <li>
              <?php
              if (!empty($_SESSION['Emails'])) {
                echo '<p class="nama"> <a href="orders.php">' . $_SESSION["Emails"] . '</a></p>';
              } elseif (!empty($_SESSION['Logins'])) {
                echo '<p class="nama">' . $_SESSION["Logins"] . '</p>';
              }
              ?>

              <a href="exit.php">Выход</a>
            </li>
            <?php
          }
          ?>
        </ul>
      </div>
      <div id="contact-window" class="animate__animated animate__slideInDown">
        <div class="contact-titles">
          <h2 class="contact-title">Контактная информация</h2> <a href="#" class="close">&times;</a>
        </div>
        <div class="contact-general-info">
          <h4 class="general-title">Основные телефоны</h4>
          <p class="contact-info">Автоответчик справочной +7(945)333-31-13</p>
          <p class="contact-info-hint"> Наш бот подскажет вам по любому вопросу, используя номер базы данной, <br>
            который вы указали при регистрации.</p>
          <p class="contact-info">Единая справочная +7 (987) 94 90 </p>
          <p class="contact-info-hint">Наши консультанты помогут вам, круглосуточно.</p>
          <p class="contact-info">Служба контроля качества 8(800)222-33-44</p>
          <p class="contact-info-hint">Если у вас возникли вопросы или притензии по поводу обслуживания.</p>
        </div>
        <div class="contact-other-info">
          <h4 class="other-title">Адрес и обратная связь</h4>
          <p class="other-info">Обращения по email: sladkiymir@mail.ru</p>
          <p class="other-info">Юридический адрес: 140480, Россия, г.Коломна, ул.Советская, 12а</p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>