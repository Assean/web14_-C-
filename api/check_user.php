<?php
if($_POST["ver_num"] != $_POST["ans"]){
    // $_POST["ver_num"]、$_POST["ans"] --> 前端login.php，欄位ver_num及ans傳送(name)
    echo "<script>";
    echo "alert('你輸入的驗證碼錯誤,請重新輸入');";
    echo "location.href='../login.php'";
    echo "</script>";
}else{
include_once("pdo.php");
$check_user="SELECT count(*) FROM `users` WHERE `username` = '{$_POST['username']}'";
    // 直接加上AND密碼即可做到帳號密碼驗證
$check_user_num=$pdo->query($check_user)->fetchColumn();
if($check_user_num>0){
    session_start();
    $_SESSION['user']=$_POST['username'];
    echo "<script>";
    echo "alert('登⼊成功');";
    echo "location.href=('../profile.php')";
    echo "</script>";
}else{
    echo "<script>";
    echo "alert('登⼊失敗，請確認帳號密碼是否正確');";
    echo "location.href=('../login.php')";
    echo "</script>";
}
}
