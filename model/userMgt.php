<?php

/**
 * @file      userMgt.php
 * @brief     File description
 * @author    Created by Ba-Khanh-Henry.BURGA
 * @version   19.11.2021
 */

function checkLogin() {
    //récupère fichier json
    //stocke le contenu du fichier json
    //lecture / parcours du fichier json
    //on vérifie si une des valeurs récupérée correspond à l'email saisi par l'utilisateur

    $jsonUsers = file_get_contents("model/users.json");
    $tabUsers = json_decode($jsonUsers, true);
    $email = $_POST['email'];
    $pwd = $_POST['userPswd'];
    foreach ($tabUsers as $key => $tabUsersInter) {
        foreach ($tabUsersInter as $entry => $tabLogin) {
            if (in_array($email, $tabLogin, true) &&  in_array($pwd, $tabLogin, true)) {
                return true;
            }
        }
    }

    return false;
}