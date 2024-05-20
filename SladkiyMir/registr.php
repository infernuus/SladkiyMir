<html>

<head>
  <link rel="stylesheet" href=" bootstrap-4.4.1-dist/css,
bootstrap.min.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-ft = no">

  <link rel="stylesheet" href="style.css">

</head>

<body>
  <main class="menu-maine">
    <div class="ahah">
      <button class="reg-av-button2"
        onclick="(document.getElementById('cl2').style.display=='none') ? console.log('Определённый контент уже скрыт') : document.getElementById('cl2').style.display='none'; document.getElementById('cl1').style.display=''">Создать</button>
      <button class="reg-av-button"
        onclick="(document.getElementById('cl1').style.display=='none') ? console.log('Определённый контент уже скрыт') : document.getElementById('cl1').style.display='none'; document.getElementById('cl2').style.display=''">Войти</button>
    </div>
    <div id="cl1">

      <form class="form-label" action="save_user.php" method="post">
        <p>
          <input class="input-label" name="Names" type="text" size="15" maxlength="15" placeholder="ИМЯ" required>
        </p>
        <p>
          <input class="input-label" name="Surname" type="text" size="15" maxlength="15" placeholder="ФАМИЛИЯ" required>
        </p>
        <p>
          <input class="input-label" name="Email" type="email" size="15" maxlength="15" placeholder="E-mail" required>
        </p>
        <p>
          <input class="input-label" name="Phone" type="phone" size="15" maxlength="15" placeholder="Телефон" required>
        </p>
        <p>
          <input class="input-label" name="Logins" type="text" size="15" maxlength="15" placeholder="ЛОГИН" required>
        </p>
        <p>
          <input class="input-label" name="Pass" type="password" size="15" maxlength="15" minlength="8"
            placeholder="ПАРОЛЬ" required>
        </p>
        <p>
          <input class="input-label" type="submit" name="submit" value="Зарегистрироваться">
        </p>
      </form>
    </div>
    <!--  -->
    <div id="cl2" style="display:none">
      <form class="form-label" action="test_user.php" method="post">
        <p>
          <input class="input-label" name="Logins" type="text" size="15" maxlength="15" placeholder="ЛОГИН">
        </p>
        <p>
          <input class="input-label" name="Pass" type="password" size="15" maxlength="15" placeholder="ПАРОЛЬ">
        </p>
        <p>
          <input class="input-label" type="submit" name="submit" value="Войти">
        </p>
      </form>
    </div>
    <form class="form-label" action="test_admin.php" method="post">
      <br>
      <label>Вход в кабинет администратора</label>
      <br>
      <p>
          <input class="input-label" name="Emails" type="email" size="15" maxlength="15" placeholder="ПОЧТА">
        </p>
        <p>
          <input class="input-label" name="Pass" type="password" size="15" maxlength="15" placeholder="ПАРОЛЬ">
        </p>
        <p>
          <input class="input-label" type="submit" name="submit" value="Войти">
        </p>
    </form>
    
  </main>
</body>

</html>
<?php include('footer.php') ?>