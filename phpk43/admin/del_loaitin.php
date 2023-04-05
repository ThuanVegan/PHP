<?php 
session_start();
include "config.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
$idLT = $_GET['idLT'];


$str = "delete from loaitin where idLT = $idLT";
$result = $conn->query($str);
header("Location:list_loaitin.php");
?>