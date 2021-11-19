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
        checkLogin();
        require "view/home.php";
    } else { // ask the login page
        require "view/login.php";
    }
}