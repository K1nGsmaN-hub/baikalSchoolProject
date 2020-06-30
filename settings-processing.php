<?php
    require_once "includes/auth-check.php";
    require "includes/db.php";

    $dataSettings = $_POST;
    $currentPassword = R::findOne('users', 'password = ?', array($dataSettings['currentPassword']));

    if (isset($dataSettings['submitPassword'])) {
        if ($currentPassword) {
            // the passwrod is exist
                $currentPassword->password = $dataSettings['newPassword'];
            R::store($currentPassword);

            $_SESSION['setNew'] = 'Пароль ';
        } else {
            $_SESSION['error'] = 'Текущий пароль или новый пароль, введен неверно';
        }
        header('Location: personal-area.php');

    } else if (isset($dataSettings['submitEmail'])){
        if ($currentPassword) {
            // the passwrod is exist
                $currentPassword->email = $dataSettings['newEmail'];
            R::store($currentPassword);

            $_SESSION['setNew'] = 'Email';
        } else {
            $_SESSION['error'] = 'Текущий пароль или Email, введны неверно';
        }
        header('Location: personal-area.php');
    } else if (isset($dataSettings['submitAvatar'])) {
        if ($currentPassword) {
            // the passwrod is exist
            $path = 'uploads/'.time().$_FILES['newAvatar']['name']; // path to an image
            move_uploaded_file($_FILES['newAvatar']['tmp_name'], $path); // upload an image

                $currentPassword->image = $path;
            R::store($currentPassword);
                
            $_SESSION['avatar'] = $currentPassword->image;
            $_SESSION['setNew'] = 'Аватар';
        } else {
            $_SESSION['error'] = 'Ошибка в текущем пароле или изображении';
        }
        header('Location: personal-area.php');
    }
?>