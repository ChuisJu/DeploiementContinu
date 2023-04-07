<?php
    include("../create_user.php");
    $ret1 = create_user("username$", "password");
    $ret2 = create_user("username", "passwor");
    $ret3 = create_user("USERNAME", "password");
    $ret4 = create_user("admin", "Password1234!");

    $file = fopen("DeploiementContinu/rapport/hash_commit", 'w');

    if(($ret1 == 2) && ($ret2 == 3) && ($ret3 == 5) && ($ret4 == 0)){
        printf("true");
        $data = "test_1_create_user.php => true";
    }else{
        printf("false");
        $data = "test_1_create_user.php => false";
        printf($ret1);
        printf($ret2);
        printf($ret3);
        printf($ret4);
    }


    fwrite($file, $data);