<?php
include_once("pdo.php");
$check_username="SELECT * FROM `users` WHERE `username` = '{$_POST['username']}'";
$check_password="SELECT * FROM `users` WHERE `password` = '{$_POST['password']}'";
$check_username_num=$pdo->query($check_username)->fetchColumn();
$check_password_num=$pdo->query($check_password)->fetchColumn();
if($check_username_num>0){
    echo "<script>";
    echo "alert('帳號已存在');";
    // echo "location.href=('../register.php')";
    echo "</script>";
    if($check_password_num>0){
        echo "<script>";
        // echo "alert('帳號、密碼已存在');";
        echo "location.href=('../register.php')";
        echo "</script>";
    }else{
        echo "<script>";
        // echo "alert('帳號、密碼已存在');";
        echo "location.href=('../register.php')";
        echo "</script>";
    }
}else{
    $sql="INSERT INTO `users` (`username`, `password`, `email`, `name`) 
                        VALUES ('{$_POST['username']}',
                                '{$_POST['password']}',
                                '{$_POST['email']}',
                                '{$_POST['name']}');";
    $pdo->exec($sql);
    echo "<script>";
    echo "alert('註冊成功');";
    echo "location.href=('../login.php')";
    echo "</script>";
}