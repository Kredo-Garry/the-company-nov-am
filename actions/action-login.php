<?php
    include "../classes/User.php";

    # Crreat an object
    $user = new User;

    # call the login method
    $user->login($_POST);
    # $_POST holds the data coming form the login form
?>