<?php

    include("../variable_session.php");


    $ret9 = connect_user("username", "username");
    $ret10 = connect_user("NotAUsername", "NotAP@ssword");
    $ret11 = connect_user("", "");
    $ret12 = connect_user("admin", "Password1234!");
    $ret13 = connect_user("@dmin", "Password1234!");

    $file = fopen("../rapport/hash_commit", 'w');

    if(($ret9 == 3) && ($ret10 == 3) && ($ret11 == 1) && ($ret12 == 0) && ($ret13 == 2)){
        printf("true");
        $data = "test_4_variable_session.php => true";

    }else{
        printf("false");
        $data = "test_4_variable_session.php => false";
        printf($ret9);
        printf($ret10);
        printf($ret11);
        printf($ret12);
    }


    fwrite($file, $data);