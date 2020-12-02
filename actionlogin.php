<?php
$database = new mysqli('localhost', 'root', 'kawaibii1998', 'login');

$name = $_POST['email'];
$password = $_POST['password'];
echo $name . "  " . $password;
$sql = "SELECT * FROM USER WHERE name='$name' and password = '$password'";
//echo $sql;
$result = $database->query($sql);
$user = array();
while ($row = $result->fetch_object()){
    $user['name']   = $row->name;
    $user['password'] = $row->password;
}
    if($user) {
        echo "dang nhap thanh cong";
    }
    else{
        header('Location: /login');
    }
