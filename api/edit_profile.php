<?php
    include_once "pdo.php";
    session_start();
    $user = $_SESSION["user"];
    $email = $_POST["email"];
    $name = $_POST["name"];
    $sql = "UPDATE `users` 
        SET `name`  = '{$_POST['name']}',
            `email` = '{$_POST['email']}' 
        WHERE `username` = '{$_POST['username']}'";
    $pdo->exec($sql);
    echo "<script>";
    echo "alert('修改成功');";
    echo "location.href='../profile.php'";
    echo "</script>";
    ?>