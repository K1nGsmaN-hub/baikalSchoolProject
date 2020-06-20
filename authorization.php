<?php
    if(isset($_POST['buttonSubmitSignUp'])) {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <style>
                    body {justify-content: center;}
                </style>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Авторизация</title>
                <link rel="stylesheet" href="/style/style.css">
                <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
            </head>
            <body>
        <?php
            $dataSignUp = $_POST; // ALl data from the sing up form
            
            require "includes/db.php"; // connect to dataBase with RedBean
            
            $user = R::dispense('users'); // geting the table users
            
            $user->first_name = $dataSignUp['inputName'];
            $user->sur_name = $dataSignUp['inputSurname'];
            $user->login = $dataSignUp['inputLogin'];
            $user->password = $dataSignUp['inputPassword'];
            $user->email = $dataSignUp['inputEmail'];
            
            R::store($user);

    } else if (isset($_POST['buttonSubmitSignIn'])) {
        $dataSignIn = $_POST;

        require "includes/db.php";
        // $user = R::dispense('users');
        $user = R::findOne('users', 'login = ?', array($dataSignIn['inputLogin']));
        if ($user) {
            // login is exist
            if ($user->password == $dataSignIn['inputPassword']) {
                // password is true
                session_start();
                $_SESSION['id'] = $user->id;
                $_SESSION['login'] = $user->login;
                $_SESSION['firstName'] = $user->first_name;
                $_SESSION['surName'] = $user->sur_name;
                $_SESSION['password'] = $user->password;
                header('Location: main.php'); 
            }
        } else {
            echo "Произошла ошибка. Проверьте правильность, вводимых данных.";
        }
    }
?>
</body>
</html>