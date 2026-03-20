<?php
include_once("./pdo.php");
$id = $_GET["id"];
$sql="DELETE FROM `contact` WHERE `id` = $id";
$pdo->exec($sql);
header("location:../contact.php");