<?php 
session_start();
include "config.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
$tenloaitin = $_GET['tenloaitin'];
$thutu = $_GET['thutu'];
$anhien = $_GET['anhien'];
$idtheloai = $_GET['idtheloai'];

$str = "insert into loaitin (Ten, ThuTu, Anhien, idTL) values ('$tenloaitin', $thutu, $anhien, $idtheloai)";
$result = $conn->query($str);
header('Location:list_loaitin.php');
?>