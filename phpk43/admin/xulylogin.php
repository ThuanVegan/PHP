<?php
    session_start();
    include "config.php";
    include "function.php";
    if(isset($_POST['Username']) && isset($_POST['Password'])){
        $name = $_POST['Username'];
        $password = md5($_POST['Password']);
    

    $str = "select * from users where Username='$name' and Password='$password'";
    $result = $conn -> query($str);
    $count_users = $result->num_rows;
        if($count_users == 0){
            header("Location:login.php");
        }else{
            $row = $result->fetch_assoc();
            $_SESSION['user'] = $row['Username'];
            $_SESSION['iduser'] = $row['idUser'];
            header("Location:index.php");
        }
        }else{
            header("Location:login.php");
        }