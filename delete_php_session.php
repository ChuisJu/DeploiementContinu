<?php
    function disconnect_user($login){
        $userfile = "/var/www/html/users/" . $login;
        if (empty($login)){
            return 1;
        }
        if (preg_match('/[^A-Za-z0-9]/', $login)) {
            return 2;
        }
        if(!file_exists($userfile)){
            printf($userfile);
            var_dump(file_exists($userfile));
            return 3;
        }
        $userData = file_get_contents($userfile);
        if ($userData !== $password) {
            return 4;
        }
        $_SESSION["CONNECTED"] = 0;
        return 0;
    }