<?php
    session_start();
    require "includes/db.php";

    if (isset($_POST['submitIndicators'])) {
        $dataStats = $_POST;

        $dayOfWeek = date("w", mktime(0,0,0,date("m"),date("d"),date("Y"))) + 1; // day of week< where 1 - Sunday

        // User existence check
        $userExist = R::exec('SELECT id_user, day_of_week FROM `stats` WHERE stats.id_user = :id_user AND day_of_week = :dayOfWeek', array(
            'id_user'=>$_SESSION['id'],
            'dayOfWeek'=>$dayOfWeek
        ));

        $stats = R::findOne('stats', 'id_user = ? AND day_of_week = ?', array($_SESSION['id'], $dayOfWeek));
        if ($userExist) {
            // a user is exist
                $stats->liftings = $dataStats['liftings'];
                $stats->push_ups = $dataStats['push-ups'];
                $stats->run = $dataStats['run'];
                $stats->date = date('Y-m-d');
            R::store($stats);
        } else {
            //a user is not exist
            $stats = R::dispense('stats');
                $stats->id_user = $_SESSION['id'];
                $stats->liftings = $dataStats['liftings'];
                $stats->push_ups = $dataStats['push-ups'];
                $stats->run = $dataStats['run'];
                $stats->day_of_week = $dayOfWeek;
                $stats->date = date('Y-m-d');
            R::store($stats);
        }
    }
    header('Location: personal-area.php');
?>