<?php

include("../delete_user.php");


$ret9 = update_password("username@", "password", "newpassword");
$ret10 = update_password("NotAUsername", "password", "newpassword");
$ret11 = update_password("", "wrongpassword", "newpassword");
$ret12 = update_password("admin", "Password1234!", "Password9876@");

if(($re9 == 2) && ($ret10 == 3) && ($ret11 == 1) && ($ret12 == 0)){
    printf("true");
    echo "test_3_delete_user.php => true" >> "../rapport/hash_commit";

}else{
    printf("false");
    echo "test_3_delete_user.php => false" >> "../rapport/hash_commit";
    printf($ret9);
    printf($ret10);
    printf($ret11);
    printf($ret12);
}

