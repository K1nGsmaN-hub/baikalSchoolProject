<?php
    session_start();
    require "includes/db.php";

    $dataSettings = $_POST;
    $_SESSION['error'] = '';
    if (isset($dataSettings['submitPassword'])) {
        $currentPassword = R::findOne('users', 'password = ?', array($dataSettings['currentPassword']));
        if ($currentPassword) {
            // the passwrod is exist
            $currentPassword->password = $dataSettings['newPassword'];

            R::store($currentPassword);
            $_SESSION['setNew'] = 'Пароль';
        } else {
            $_SESSION['error'] = 'Текущий пароль введен неверно';
        }
        header('Location: personal-area.php');
    } else if (isset($dataSettings['submitEmail'])){
        $currentPassword = R::findOne('users', 'password = ?', array($dataSettings['currentPassword']));
        if ($currentPassword) {
            // the passwrod is exist
            $currentPassword->email = $dataSettings['newEmail'];

            R::store($currentPassword);
            $_SESSION['setNew'] = 'Email';
        } else {
            $_SESSION['error'] = 'Текущий пароль введен неверно';
        }
        header('Location: personal-area.php');
    }
?>