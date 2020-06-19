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
        $firstName = $_POST['inputName'];
        $surName = $_POST['inputSurname'];
        $login = $_POST['inputLogin'];
        $password = $_POST['inputPassword'];
        $email = $_POST['inputEmail'];
        echo $surName;

        require_once 'connect.php';
        $query = "INSERT INTO `users` (id, login, firstName, surName, password, email) VALUES (NULL, '$firstName', '$surName', '$login', '$password', '$email')";
        $result = mysqli_query($link, $query);
        if ($result) {
            ?>
                <h2 class="auth-title">Регистрация прошла успешно!</h2>
                <a href="index.html" class="signin-button auth-button">Войти</a>
            <?php
        } else {
            ?>
                <h2 class="auth-title">Прозошла ошибка :(</h2>
                <a href="index.html" class="auth-button">Вернуться</a>
            <?php
            echo " ".mysqli_error($link);
        }
    } else if (isset($_POST['buttonSubmitSignIn'])) {
        $login = $_POST['inputLogin'];
        $password = $_POST['inputPassword'];

        require_once 'connect.php';
        $query = "SELECT id, firstName, surName, login, password, email FROM `users` WHERE login = '$login' and password = '$password'";
        $result = mysqli_query($link, $query);

        if (!$result) {
            echo " ".mysqli_error($link);
            echo " ".$login." ";
            echo " ".$password." ";
            ?>
                <h2 class="auth-title">Прозошла ошибка</h2>
                <a href="index.html" class="auth-button">Вернуться</a>
            <?php
            echo " ".mysqli_error($link);
            echo " ".$row['login']." ";
            echo " ".$row['password']." ";
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                if (true) {
                    session_start();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['surName'] = $row['surName'];
                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $password;
                    header('Location: main.php');
                }
            }
        }
    }
?>
</body>
</html>