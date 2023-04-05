<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include "config.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}

$tieude = $_POST['tieude'];
$tomtat = $_POST['tomtat'];
$idsukien = $_POST['sukien'];
$noidung = $_POST['noidung'];
$anhien = $_POST['anhien'];
$date = date('Y/m/d H:i:s');
$idtheloai = $_POST['idtheloai'];
$idloaitin = $_POST['idloaitin'];
$iduser = $_SESSION['iduser'];

$hinhdaidien = $_FILES["fileToUpload"]["name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$str = "insert into tin (TieuDe, TomTat, urlHinh, idSK, Ngay, Noidung, 
AnHien, idTL, idLT, idUser) values ('$tieude', '$tomtat', '$hinhdaidien', $idsukien, '$date', '$noidung',
$anhien, $idtheloai, $idloaitin, $iduser)";
$result = $conn->query($str);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
header("Location:list_tin.php");
?>