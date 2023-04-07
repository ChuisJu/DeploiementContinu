<?php 
    function update_password($login, $old_password, $new_password){
        $userfile = "/var/www/html/users/" . $login;
        if((empty($login)) || (empty($old_password)) || (empty($new_password))){
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
        file_put_contents($userfile, $new_password);
        return 0;
    }