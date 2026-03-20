<?php
include_once("./pdo.php");

$user = $_POST["user"];
$score = $_POST["score"];

// 使用變數串接確保 SQL 語法正確
$sql = "INSERT INTO `result` (`name`, `score`) VALUES ('$user', '$score')";

$pdo->exec($sql);
// header("location: ../index.php"); // 若是 AJAX 請求，通常不需要跳轉
?>