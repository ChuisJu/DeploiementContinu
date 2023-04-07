<?php

include("../password_update.php");


$ret9 = update_password("username", "password", "newpassword");
$ret10 = update_password("NotAUsername", "password", "newpassword");
$ret11 = update_password("username", "wrongpassword", "newpassword");
$ret12 = update_password("username", "password", "");

if(($re9 == 2) && ($ret10 == 3) && ($ret11 == 1) && ($ret12 == 0)){
    printf("true");
    echo "test_2_password_update.php => true" >> "../DeploiementContinu/rapport/hash_commit";

}else{
    printf("false");
    echo "test_2_password_update.php => false" >> "../DeploiementContinu/rapport/hash_commit";
    printf($ret9);
    printf($ret10);
    printf($ret11);
    printf($ret12);
}

