<?php
    session_start();
    require "db.php";
    date_default_timezone_set("Asia/Irkutsk"); // set defualt time zone

    $_SESSION['day_of_week'] = date("w", mktime(0,0,0,date("m"),date("d"),date("Y"))) + 1; // day of week< where 1 - Sunday

    // take current user stats
    $statsDaily = R::findOne('stats', 'id_user = ? AND day_of_week = ?', array($_SESSION['id'], $_SESSION['day_of_week'])); // find user in the stats table
    if ($statsDaily) {
        $liftingsDaily = $statsDaily->liftings;
        $pushUpsDaily = $statsDaily->push_ups;
        $runDaily = $statsDaily->run;
    }


    // take all user stats for the week
    $statsWeekly = R::getAll('SELECT * FROM `stats` WHERE id_user = :id_user AND day_of_week <= :day_of_week ', array(
        'id_user'=>$_SESSION['id'],
        'day_of_week'=>$_SESSION['day_of_week']
    ));
    foreach ($statsWeekly as $sw) {
        $liftingsWeekly += $sw['liftings']; // all liftings for week
        $pushUpsWeekly += $sw['push_ups']; // all push_ups for week
        $runWeekly += $sw['run']; // all run for week
    }
?>