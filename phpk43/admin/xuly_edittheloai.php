<?php 
session_start();
include "config.php";
include "function.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
$tentl = $_GET['tentheloai'];
$thutu = $_GET['thutu'];
$anhien = $_GET['anhien'];
$idTL = $_GET['idTL'];

$str = "update theloai set TenTL = '$tentl', Thutu = $thutu, Anhien = $anhien where idTL = $idTL";
$result = $conn->query($str);
header('Location:list_theloai.php');
?>