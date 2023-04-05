<?php include "admin/config.php"; ?>
<?php include "function.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
-->	

	<head>
		<title>Thuan PHP K43</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
		<!-- home slider-->
		<link href="css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" media="screen">	
		<link href="responsive.css" rel="stylesheet" media="screen">		
	</head>

	<body>
	
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href=""><h1><span>GOLDEN NEWS</span> Blog</h1></a>
					</div>
					<div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div>
				</div>
				<div class="header_bottom">
					<nav>
						<ul id="nav">
                            <li><a href="index.php">Trang chủ</a></li>
                            <?php
                            $str_theloai = "select * from theloai where AnHien = 1";
                            $result_theloai = $conn->query($str_theloai);
                            while($rows_theloai = $result_theloai->fetch_assoc()){ 
                            $idtheloai = $rows_theloai['idTL'];
                            ?>
                            <li id="dropdown">
                            <a href="theloai.php?idTL=<?php echo $idtheloai; ?>" >
                                <?php echo $rows_theloai['TenTL']; ?>
                            </a>
                                <ul>
                                <?php
                                $str_loaitin = "select * from loaitin where AnHien = 1 and idTL = $idtheloai";
                                $result_loaitin = $conn->query($str_loaitin);
                                while($rows_loaitin = $result_loaitin->fetch_assoc()){ ?>
                                    <li>
                                    <a href="loaitin.php?idLT=<?php echo $rows_loaitin['idLT']; ?>">
                                        <?php echo $rows_loaitin['Ten']; ?>
                                    </a>
                                    </li>
                                    <?php }
                                ?>
                                </ul>
                            </li>
                            <?php }
                            ?>
						</ul>
					</nav>
				</div>
			</div>
		</section>