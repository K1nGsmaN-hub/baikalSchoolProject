<li class="link__dropdown-menu">
    <?php echo $_SESSION['firstName']." ".$_SESSION['surName']; ?>                    
    <ul class="dropdown-menu__area">
        <li><?php echo $_SESSION['login'] ?></li>
        <span class="horizontal_rule"></span>
        <li><a href="main.php">Главная</a></li>
        <?php
            $isAdmin = R::findOne('users', 'id = ?', array($_SESSION['id']));
            if ($isAdmin->is_admin == '1') {
                echo "<li><a href='admin-panel.php'>Кабинет</a></li>";
            } else {
                echo "<li><a href='personal-area.php'>Кабинет</a></li>";
            }
        ?>
        <li>
            <form action="exit.php" method="POST" class="menu__exit">
                <input type="submit" value="Выход" name="buttonSubmitExit">
            </form>
        </li>
    </ul>
</li>