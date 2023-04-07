<?php

    include("../delete_php_session.php");


    $ret5 = disconnect_user("username");
    $ret6 = disconnect_user("NotAUsername");
    $ret7 = disconnect_user("");
    $ret8 = disconnect_user(null);


    $file = fopen("DeploiementContinu/rapport/hash_commit", 'w');

    if(($ret5 == 2) && ($ret6 == 3) && ($ret7 == 1) && ($ret8 == 0)){
        printf("true");
        $data = "test_5_delete_php_session.php => true";

    }else{
        printf("false");
        $data = "test_5_delete_php_session.php => false";
        printf($ret5);
        printf($ret6);
        printf($ret7);
        printf($ret8);
    }

    fwrite($file, $data);
