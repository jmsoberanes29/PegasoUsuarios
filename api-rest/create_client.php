<?php
    require_once('../includes/User.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST' 
        && isset($_GET['name']) && isset($_GET['email']) && isset($_GET['city'])  && isset($_GET['telephone'])){
            User::create_user($_GET['name'], $_GET['email'], $_GET['city'], $_GET['telephone']);
        }

?>