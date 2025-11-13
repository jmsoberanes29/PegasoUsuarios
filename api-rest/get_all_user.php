<?php
    require_once('../includes/User.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        User::get_all_users();
    }

?>