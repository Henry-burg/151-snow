<?php

/**
 * @file      userMgt.php
 * @brief     File description
 * @author    Created by Ba-Khanh-Henry.BURGA
 * @version   19.11.2021
 */

function checkLogin() {
    // get jason file
    // stock the content of the jason file
    // verify if th user's data match th jason's data

    $jasonUsers = file_get_contents("model/users.jason");
    $tabUsers = json_decode($jasonUsers, true);
}