<?php
    require_once "includes/auth-check.php";
    require_once "includes/take_userstats.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- changes check -->
    <script>
        let error = '<?php echo $_SESSION['error']; ?>';
        let elementChanged = '<?php echo $_SESSION['setNew']; ?>';
        if (error) {
            alert(error); 
        } else if (elementChanged) {
            alert(elementChanged + ' был успешно изменен!');
        }
    </script>
    <?php 
        $_SESSION['error'] = '';
        $_SESSION['setNew'] = '';
    ?>

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
        <div class="data__error">
            
        </div>
        <div class="personal-data">
            <div class="data__avatar">
                <img src="<?= $_SESSION['avatar'] ?>" alt="avatar">
            </div>
            <div class="data__text">
                <ul>
                    <li class="text_name"><?php echo $_SESSION['firstName']." ".$_SESSION['surName']; ?> </li>
                    <li class="text_info">Логин:</li><span><?php echo $_SESSION['login'] ?></span>
                    <li class="text_info">Email:</li><span><?php echo $_SESSION['email'] ?></span>
                    <li class="text_info button-settings">Изменить</li>

                    <!-- modal window -->
                    <div class="settings__modal-window">
                        <div class="window__content">
                            <span class="button-close"></span>
                            <h4 class="content_title">Изменение</h4>
                            <div class="content__buttons">
                                <button id="first-modal-button" class="button__item item-active">Пароля</button>
                                <button id="second-modal-button" class="button__item">Email</button>
                                <button id="third-modal-button" class="button__item">Аватар</button>
                            </div>
                            <form class="content__form form-password item-active" action="settings-processing.php" method="POST" required>
                                <input class="text-field" type="text" name="currentPassword" placeholder="Текущий пароль">
                                <input class="text-field" type="text" name="newPassword" placeholder="Новый пароль">
                                <input class="buttonSubmit" type="submit" value="Изменить" name="submitPassword">
                            </form>
                            <form class="content__form form-email" action="settings-processing.php" method="POST">
                                <input class="text-field" type="text" name="newEmail" placeholder="Новый email">
                                <input class="text-field" type="text" name="currentPassword" placeholder="Текущий пароль" required>
                                <input class="buttonSubmit" type="submit" value="Изменить" name="submitEmail">
                            </form>
                            <form class="content__form form-avatar" action="settings-processing.php" method="POST" enctype="multipart/form-data">
                                <input type="file" class="text-field" name="newAvatar" accept="image/jpeg,image/png">
                                <input class="text-field" type="text" name="currentPassword" placeholder="Текущий пароль" required>
                                <input class="buttonSubmit" type="submit" value="Изменить" name="submitAvatar">
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
                <form action="stats-processing.php" class="item__form" method="POST" required>
                    <p class="form__text">Подтигивания</p>
                    <input type="text" placeholder="0" name="liftings" class="text-field">
                    <p class="form__text">Отжимания</p>
                    <input type="text" placeholder="0" name="push-ups" class="text-field" required>
                    <p class="form__text">Бег (в километрах)</p>
                    <input type="text" placeholder="0" name="run" class="text-field">
                    <input type="submit" value="Отправить" name="submitIndicators" class="buttonSubmit">
                </form>
            </div>
            <div id="second-switched-element" class="indicator-data indicator__item">
                <div class="item__buttons content__buttons">
                    <button id="first-show-button" class="button__item item-active">За сегодня</button>
                    <button id="second-show-button" class="button__item">С начала недели</button>
                </div>
                <ul id="first-show-element" class="item__data item-active">
                    <h4 class="data_title">Сегодня Вы:</h4>
                    <li>Подтянулись: <?php echo $liftingsDaily; ?> раз</li>
                    <li>Отжались: <?php echo $pushUpsDaily; ?> раз</li>
                    <li>Пробежали: <?php echo $runDaily; ?> км</li>
                </ul>
                <ul id="second-show-element" class="item__data">
                    <h4 class="data_title">С начала недели Вы:</h4>
                    <li>Подтянулись: <?php echo $liftingsWeekly; ?> раз</li>
                    <li>Отжались: <?php echo $pushUpsWeekly; ?> раз</li>
                    <li>Пробежали: <?php echo $runWeekly; ?> км</li>
                </ul>
            </div>
        </div>
    </section>

    <script src="script/dropdown_menu.js"></script>
    <script src="script/user_settings.js"></script>
    <script src="script/show_stats.js"></script>
    <script src="script/switch_indicator.js"></script>
</body>
</html>