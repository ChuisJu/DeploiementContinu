<?php
    function delete_user($login, $password){
        $userfile = "/var/www/html/users/" . $login;
        if ((empty($login))){
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
        if(!unlink($login)){
            return 5;
        }else{
            return 0;
        }
    }