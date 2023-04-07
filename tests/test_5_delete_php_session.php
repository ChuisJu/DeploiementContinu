<?php

    include("../variable_session.php");


    $ret5 = disconnect_user("username");
    $ret6 = disconnect_user("NotAUsername");
    $ret7 = disconnect_user("");
    $ret8 = disconnect_user(null);

    if(($re5 == 2) && ($ret6 == 3) && ($ret7 == 1) && ($ret8 == 0)){
        printf("true");
        echo "test_5_delete_php_session.php => true" >> "../rapport/hash_commit";

    }else{
        printf("false");
        echo "test_5_delete_php_session.php => false" >> "../rapport/hash_commit";
        printf($ret5);
        printf($ret6);
        printf($ret7);
        printf($ret8);
    }
