<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('nav_admin.php'); ?>
    <main class="menu-main">
    
    <label class="form-label">Добавить продукты </label> <br><br><br>

    <form class= "form" action="save_menu.php" method="post">
    <p>
      <label>Название продукта: <br></label>
      <textarea name="name" cols="38" rows="3"></textarea>
    </p>
    <p>
      <label>Описание продукта:<br></label>
      <textarea name="discription" cols="38" rows="6"></textarea>
    </p>
    <p>
      <label>Месторасположение фото: </br> (пр. img/название.png)<br></label>
      <textarea name="photo" cols="38" rows="6"></textarea>
    </p>
    <p>
      <label>Цена продукта:<br></label>
      <textarea name="price" cols="38" rows="6"></textarea>
    </p>
    <p>
      <label>Масса продукта:<br></label>
      <textarea name="mass" cols="38" rows="6"></textarea>
    </p>
    <p>
      <input type="submit" name="submit" value="Coxpaнить">
    </p>
    </main>
  </form>
    <?php include('footer.php'); ?>
</body>
</html>