<!DOCTYPE html>
<html lang="en">
<head>
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
                <a href="login.html" class="signin-button auth-button">Войти</a>
            <?php
        } else {
            ?>
                <h2 class="auth-title">Прозошла ошибка</h2>
                <a href="index.html" class="auth-button">Вернуться</a>
            <?php
        }
    ?>
</body>
</html>