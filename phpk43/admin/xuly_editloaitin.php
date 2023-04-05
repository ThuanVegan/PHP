<?php
session_start();
include "config.php";
if(!isset($_SESSION['user'])){
    header('Location:login.php');
}

$tenloaitin = $_GET['tenloaitin'];
$thutu = $_GET['thutu'];
$anhien = $_GET['anhien'];
$idtheloai = $_GET['idtheloai'];
$idloaitin = $_GET['idloaitin'];


$str = "update loaitin set Ten = '$tenloaitin', Thutu = $thutu, Anhien = $anhien, idTL = $idtheloai where idLT = $idloaitin ";
$result = $conn->query($str);
header('Location:list_loaitin.php');
?>

