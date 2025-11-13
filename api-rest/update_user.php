<?php
    require_once('../includes/User.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'PUT' 
        && isset($_GET['id'], $_GET['name']) && isset($_GET['email']) && isset($_GET['city'])  && isset($_GET['telephone'])){
            User::update_user($_GET['id'], $_GET['name'], $_GET['email'], $_GET['city'], $_GET['telephone']);
        }

?>