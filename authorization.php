<?php
    if(isset($_POST['buttonSubmitSingUp'])) {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <style>
                    body {
                        justify-content: center;
                    }
                </style>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Авторизация</title>
                <link rel="stylesheet" href="/style/style.css">
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
            </head>
            <body>
        <?php
        $login = $_POST['inputLogin'];
        $password = $_POST['inputPassword'];
        $email = $_POST['inputEmail'];

        require_once 'connect.php';
        $query = "INSERT INTO `users` (id, login, password, email) VALUES (NULL, '$login', '$password', '$email')";
        $result = mysqli_query($link, $query);
        if ($result) {
            ?>
                <h2 class="auth-title">Авторизация прошла успешно</h2>
                <a href="index.html" class="signin-button auth-button">Войти</a>
            <?php
        } else {
            ?>
                <h2 class="auth-title">Прозошла ошибка</h2>
                <a href="index.html" class="auth-button">Вернуться</a>
            <?php
        }
    } else if (isset($_POST['buttonSubmitSignIn'])) {
        $login = $_POST['inputLogin'];
        $password = $_POST['inputPassword'];

        require_once 'connect.php';
        $query = "SELECT login, password, email FROM `users`";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_array($result)) {
            if ($login == $row['login'] or $row['email']) {
                session_start();
                $_SESSION['login'] = $login;
                $_SESSION['password'] = $password;
                header('Location: main.php');
            } else {
                ?>
                    <h2 class="auth-title">Прозошла ошибка</h2>
                    <a href="index.html" class="auth-button">Вернуться</a>
                <?php
            }
        }
    }
?>
</body>
</html>