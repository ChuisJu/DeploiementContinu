<?php

include("../delete_user.php");


$ret9 = delete_user("username@", "password", "newpassword");
$ret10 = delete_user("NotAUsername", "password", "newpassword");
$ret11 = delete_user("", "wrongpassword", "newpassword");
$ret12 = delete_user("admin", "Password1234!", "Password9876@");


$file = fopen("DeploiementContinu/rapport/hash_commit", 'w');

if(($ret9 == 2) && ($ret10 == 3) && ($ret11 == 1) && ($ret12 == 0)){
    printf("true");
    $data = "test_3_delete_user.php => true";

}else{
    printf("false");
    $data = "test_3_delete_user.php => false";
    printf($ret9);
    printf($ret10);
    printf($ret11);
    printf($ret12);
}


fwrite($file, $data);