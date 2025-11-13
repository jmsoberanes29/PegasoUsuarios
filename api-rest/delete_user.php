<?php
    require_once('../includes/User.class.php');

    if($_SERVER['REQUEST_METHOD'] == 'DELETE' 
        && isset($_GET['id']) ){
            User::delete_user_by_id($_GET['id']);
        }

?>