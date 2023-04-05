<?php 
session_start();
include "config.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
$tentl = $_GET['tentheloai'];
$thutu = $_GET['thutu'];
$anhien = $_GET['anhien'];

$str = "insert into theloai (TenTL, ThuTu, AnHien) values ('$tentl', $thutu, $anhien)";
$result = $conn->query($str);
header('Location:list_theloai.php');
?>