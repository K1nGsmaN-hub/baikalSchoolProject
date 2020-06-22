<li class="link__dropdown-menu">
    <?php echo $_SESSION['firstName']." ".$_SESSION['surName']; ?>                    
    <ul class="dropdown-menu__area">
        <li><?php echo $_SESSION['login'] ?></li>
        <span class="horizontal_rule"></span>
        <li><a href="main.php">Главная</a></li>
        <li><a href="personal-area.php">Кабинет</a></li>
        <li><a href="user-settings.php"></a>Настроки</li>
        <li>
            <form action="exit.php" method="POST" class="menu__exit">
                <input type="submit" value="Выход" name="buttonSubmitExit">
            </form>
        </li>
    </ul>
</li>