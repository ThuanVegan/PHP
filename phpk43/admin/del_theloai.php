<?php 
session_start();
include "config.php";
if(!isset($_SESSION['user'])){
    header("Location:login.php");
}
$idTL = $_GET['idTL'];


$str = "delete from theloai where idTL = $idTL";
$result = $conn->query($str);
header("Location:list_theloai.php");
?>