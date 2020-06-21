<?
    session_start();
    require "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body class="main personal-page">
    <header>
        <nav class="menu wrapper">
            <div class="menu__logo">
                <img src="image/logok.png" alt="logo">
            </div>

            <ul class="menu__links">
                
                <li class="link__dropdown-menu">
                    <?php echo $_SESSION['firstName']." ".$_SESSION['surName']; ?>                    
                    <ul class="dropdown-menu__area">
                        <li><?php echo $_SESSION['login'] ?></li>
                        <span class="horizontal_rule"></span>
                        <li><a href="main.php">Главная</a></li>
                        <li><a href="#">Кабинет</a></li>
                        <li>
                            <form action="exit.php" method="POST" class="menu__exit">
                                <input type="submit" value="Выход" name="buttonSubmitExit">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="profile wrapper">
        <div class="personal-data">
            <div class="data__avatar">
                <img src="image/user_avatar.png" alt="avatar">
            </div>
            <div class="data__text">
                <ul>
                    <li class="text_name"><?php echo $_SESSION['firstName']." ".$_SESSION['surName']; ?> </li>
                    <li class="text_info">Логин:</li><span><?php echo $_SESSION['login'] ?></span>
                    <li class="text_info">Email:</li><span><?php echo $_SESSION['email'] ?></span>
                </ul>
            </div>
        </div>
        <div class="personal-indicators">
            <div class="block-switch">
                <div id="first-switch-button" class="switch__item">
                    <span>Мои показатели</span>
                </div>
                <div id="second-switch-button" class="switch__item">
                    <span>Просмотр</span>
                </div>
                <div class="switch-indicator"></div>
            </div>
            <div id="first-switched-element" class="indicator__form indicator__item item-active">
                <form action="" class="item__form" method="POST">
                    <p class="form__text">Подтигивания</p>
                    <input type="text" placeholder="0" name="liftings" class="text-field">
                    <p class="form__text">Отжимания</p>
                    <input type="text" placeholder="0" name="push-ups" class="text-field">
                    <p class="form__text">Бег (в километрах)</p>
                    <input type="text" placeholder="0" name="run" class="text-field">
                    <input type="submit" value="Отправить" name="submitIndicators" class="buttonSubmit">
                </form>
            </div>
            <div id="second-switched-element" class="indicator-data indicator__item">
                <ul class="item__data">
                    <h4 class="data_title">Мои показатели за сегодня:</h4>
                    <li>Подтягивания: 10 раз</li>
                    <li>Отжимания: 10 раз</li>
                    <li>Бег: 5 км</li>
                </ul>
            </div>
        </div>
    </section>

    <script src="script/dropdown_menu.js"></script>
    <script src="script/switch_indicator.js"></script>
</body>
</html>