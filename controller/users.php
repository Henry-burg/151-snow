<?php

/**
 * @file      users.php
 * @brief     File description
 * @author    Created by Ba-Khanh-Henry.BURGA
 * @version   16.11.2021
 */

require "model/userMgt.php";

function login() {
    // check if email is set, if we come from the login page and click on the login button
    if (isset($_POST['email'])) {
        if(checkLogin()) {
            $_SESSION['email'] = $_POST['email'];
            require "view/home.php";
            echo "mail is set and ok";
        } else {
            $errorMsg = "Erreur [email ou mot de passe incorrect]";
            require "view/login.php";
            echo "mail is not set";
        }
    } else { // ask the login page
        require "view/login.php";
    }
}

function logout() {
    session_destroy();
    $_SESSION = array();
    require "view/home.php";
}