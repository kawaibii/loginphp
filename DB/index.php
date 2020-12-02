<?php

$database = new mysqli('localhost', 'root', 'kawaibii1998', 'login');
//
//$sql = "CREATE TABLE USER(
//    name VARCHAR(256),
//    password VARCHAR(256)
//)";

//$sql = "INSERT INTO USER (name, password)
//VALUE('khoanld98@gmail.com', '12345')";
if($database->query($sql)){
    echo "thanh cong";
}
else{
    $database->error;
}
