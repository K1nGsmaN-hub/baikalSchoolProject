<?php
    session_start();
    require "includes/db.php";

    //update user stats
    if (isset($_POST['submitIndicators'])) {
        $dataStats = $_POST;

        $statsUser = R::findOne('stats', 'id_user = ?', array($_SESSION['id']));
        if ($statsUser) {
            // a user in the stats table is exist
            $statsUser->liftings = $dataStats['liftings'];
            $statsUser->push_ups = $dataStats['push-ups'];
            $statsUser->run = $dataStats['run'];

            R::store($statsUser);
        } else {
            // a user in the stats table is not exist
            $statsAdd = R::dispence('stats'); // connect to the stats table

            $statsAdd->id_user = $_SESSION['id'];
            $statsAdd->liftings = $dataStats['liftings'];
            $statsAdd->push_ups = $dataStats['push-ups'];
            $statsAdd->run = $dataStats['run'];

            R::store($statsAdd); // send a new data for add a new user stats
        }
    }
    header('Location: personal-area.php');
?>