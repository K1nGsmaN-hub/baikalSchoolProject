<?php
    require_once "includes/auth-check.php";
    require "includes/db.php";
    require "includes/make_table.php";

    if ($_SESSION['is_admin'] == 0) {
        header('Location: main.php');
    } 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a9a10572e7.js" crossorigin="anonymous"></script>
</head>
<body class="admin">
    <header>
        <nav class="menu wrapper">
            <div class="menu__logo">
                <img src="image/logok.png" alt="logo">
            </div>

            <ul class="menu__links">                
                <?php require "includes/nav-menu.php"; ?>         
            </ul>
        </nav>
    </header>

    <section class="content">
        <div class="block-switch">
            <div id="first-switch-button" class="switch__item switch__signup">
                <span>Просмотр онлайн</span>
            </div>
            <div id="second-switch-button" class="switch__item switch__signin">
                <span>Загрузить в Excel</span>
            </div>
            <div class="switch-indicator"></div>
        </div>

        <div class="content__table item-active" id="first-switched-element">
            <table>
                <tr class="table__title">
                    <td>Имя</td>
                    <td>Фамилия</td>
                    <td>День недели</td>
                    <td>Подтягивания</td>
                    <td>Отжимания</td>
                    <td>Бег в км</td>
                </tr>
                <?php
                
                    $usersAll = R::getAll('SELECT first_name, sur_name, day_of_week, liftings, push_ups, run FROM `stats`, `users` WHERE users.id = stats.id_user ORDER BY `stats`.`day_of_week`', array());

                    foreach($usersAll as $usal) {
                        echo "<tr class='table__content'>";
                            echo "<td>".$usal['first_name']."</td>";
                            echo "<td>".$usal['sur_name']."</td>";
                            echo "<td>".$usal['day_of_week']."</td>";
                            echo "<td>".$usal['liftings']."</td>";
                            echo "<td>".$usal['push_ups']."</td>";
                            echo "<td>".$usal['run']."</td>";
                        echo "</tr>";
                    }
                
                ?>
            </table>
        </div>
        <div class="content__download" id="second-switched-element">
           <form action="" method="post">
                <p class="form__text">Скачать таблицу Excel</p>
                <button type="submit" name="buttonDownload"><i class="fas fa-download"></i></button>
           </form>
        </div>

    </section>


    <script src="script/dropdown_menu.js"></script>
    <script src="script/switch_indicator.js"></script>
</body>
</html>