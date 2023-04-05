<?php 
session_start();
include "config.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
$idTin = $_GET['idTin'];


echo $str = "delete from tin where idTin = $idTin";
$result = $conn->query($str);
header("Location:list_tin.php");
?>