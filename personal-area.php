<?php
    session_start();
    require "includes/db.php";

    // print user stats
    $statsPrint = R::findOne('stats', 'id_user = ?', array($_SESSION['id'])); // find user in the stats table
    if ($statsPrint) {
        $user_liftings = $statsPrint->liftings;
        $user_pushUps = $statsPrint->push_ups;
        $user_run = $statsPrint->run;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="main personal-page">
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
                    <li class="text_info button-settings">Изменить</li>
                    <div class="settings__modal-window">
                        <div class="window__content">
                            <span class="button-close"></span>
                            <h4 class="content_title">Изменение</h4>
                            <div class="content__buttons">
                                <button id="first-button" class="button__item item-active">Пароля</button>
                                <button id="second-button" class="button__item">Email</button>
                            </div>
                            <form class="content__form form-password item-active" action="" method="POST">
                                <input class="text-field" type="text" name="currentPassword" id="" placeholder="Текущий пароль">
                                <input class="text-field" type="text" name="newPassword" id="" placeholder="Новый пароль">
                                <input class="buttonSubmit" type="submit" value="Изменить" name="submitPassword">
                            </form>
                            <form class="content__form form-email" action="" method="POST">
                                <input class="text-field" type="text" name="newEmail" id="" placeholder="Новый email">
                                <input class="text-field" type="text" name="currentPassword" id="" placeholder="Текущий пароль">
                                <input class="buttonSubmit" type="submit" value="Изменить" name="submitEmail">
                            </form>
                        </div>
                    </div>
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
                <form action="stats-processing.php" class="item__form" method="POST">
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
                    <li>Подтягивания: <?php echo $user_liftings; ?> раз</li>
                    <li>Отжимания: <?php echo $user_pushUps; ?> раз</li>
                    <li>Бег: <?php echo $user_run; ?> км</li>
                </ul>
            </div>
        </div>
    </section>

    <script src="script/dropdown_menu.js"></script>
    <script src="script/user_settings.js"></script>
    <script src="script/switch_indicator.js"></script>
</body>
</html>