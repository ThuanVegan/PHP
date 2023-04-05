<?php
session_start();
include "config.php";
include "function.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}

$tieude = $_GET['tieude'];
$tomtat = $_GET['tomtat'];
$idsukien = $_GET['sukien'];
$noidung = $_GET['noidung'];
$anhien = $_GET['anhien'];
$date = date("Y/m/d");
$idtheloai = $_GET['idtheloai'];
$idloaitin = $_GET['idloaitin'];
$iduser = $_SESSION['iduser'];
$idTin = $_GET['idTin'];

$str = "update tin set TieuDe = '$tieude', TomTat = '$tomtat', idSK = $idsukien, Noidung = '$noidung',
AnHien = '$anhien', Ngay = '$date', idTL = $idtheloai, idLT = $idloaitin, idUser = $iduser where idTin = $idTin";
$result = $conn->query($str);
header("Location:list_tin.php");
?>