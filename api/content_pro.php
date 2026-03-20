<?php
include_once("./pdo.php");
$sql="INSERT INTO `contact` (`name`, `sex`, `email`, `phone`, `content`) 
                VALUES ('{$_POST["name"]}',
                        '{$_POST["sex"]}',
                        '{$_POST["email"]}',
                        '{$_POST["phone"]}',
                        '{$_POST["content"]}')";
    $pdo->exec($sql);
    echo "<script>";
    echo "alert('送出完成');";
    echo "location.href='../contact.php'";
    echo "</script>";