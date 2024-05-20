<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main class="menu-main">
        <?php
        mb_internal_encoding("UTF-8");
        // Запускаем сессию
        session_start();
        // Подключаем файлы для шапки и меню
        include ('nav.php');
        ?>

        <?php
        include ("dbconnect.php");
        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }
        $result = $mysqli->query
        ("SELECT * FROM products WHERE id ='$id'");
        $result = mysqli_query($mysqli, "SELECT * FROM products");

        $div = "<div class='cards'>";
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $div .= '<div class="card-1">';
            $div .= '<div class="card-1-content">';
            $id = $row
            ['id'];
            $div .= '<div class="image-1""><img class="image-1" src= ' . $row['photo'] . '></div>';
            $div .= '<p class="paragraph-1"><a href="basket.php?id=' . $id . '">' . $row['name'] . '</a></p>';
            $div .= '<p class="paragraph-1-2">' . $row['discription'] . '</p>';
            $div .= '<ul class="ul-optinos"> <li> <p> Цена: ' . $row['price'] . '</p> </li> <li> Масса: ' . $row['mass'] . '</li></ul>';
            $div .= '<p class="subit-but"><a href="basket.php?id=' . $id . ' &name=' . $row['name'] . '&price=' . $row['price'] . '"> Add to cart </a></p>';
            $div .= '</div>';
            $div .= '</div>';
            $k++;

            if ($id == 4) { // Проверка на достижение id 4
                $div .= '</div>';
                break;
            }
        }
        $div .= '</div>';
        echo $div;
        ?>
        <?php
        include ("dbconnect.php");

        $label = 'id';
        $id = false;
        if (!empty($_GET[$label])) {
            $id = $_GET[$label];
        }

        $result = $mysqli->query("SELECT * FROM products WHERE id >= 5 AND id <= 8");

        $div = "<div class='cards'>";
        $k = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $div .= '<div class="card-1">';
            $div .= '<div class="card-1-content">';
            $id = $row
            ['id'];
            $div .= '<img class="image-2" src= ' . $row['photo'] . '>';
            $div .= '<p class="paragraph-2"><a href="basket.php?id=' . $id . '">' . $row['name'] . '</a></p>';
            $div .= '<p class="paragraph-1-3">' . $row['discription'] . '</p>';
            $div .= '<ul class="ul-optinos"> <li> <p> Цена: ' . $row['price'] . '</p> </li> <li> Масса: ' . $row['mass'] . '</li></ul>';
            $div .= '<p class="subit-but"><a href="basket.php?id=' . $id . ' &name=' . $row['name'] . '&price=' . $row['price'] . '"> Add to cart </a></p>';

            $div .= '</div>';
            $div .= '</div>';
            $k++;

        }

        $div .= '</div>';
        echo $div;
        if (isset($_GET['action']) && $_GET['action'] == 'perenos' && isset($_GET['id'])) {
            $productId = $_GET['id'];
            include('basket.php');
        }
        ?>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>