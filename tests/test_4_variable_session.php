<?php

    include("../new.php");


    $ret9 = connect_user("username", "username");
    $ret10 = connect_user("NotAUsername", "NotAP@ssword");
    $ret11 = connect_user("", "");
    $ret12 = connect_user("admin", "Password1234!");
    $ret13 = connect_user("@dmin", "Password1234!");

    if(($re9 == 3) && ($ret10 == 3) && ($ret11 == 1) && ($ret12 == 0) && ($ret13 == 2)){
        printf("true");
        echo "test_4_variable_session.php => true" >> "../DeploiementContinu/rapport/hash_commit";

    }else{
        printf("false");
        echo "test_4_variable_session.php => false" >> "../DeploiementContinu/rapport/hash_commit";
        printf($ret9);
        printf($ret10);
        printf($ret11);
        printf($ret12);
    }
