<?php include "header.php"; ?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en"> -->

<!--
---- Clean html template by http://WpFreeware.com
---- This is the main file (index.html).
---- You are allowed to change anything you like. Find out more Awesome Templates @ wpfreeware.com
---- Read License-readme.txt file to learn more.
-->	

	<head>
		<title>Welcome to my site</title>
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
		<link rel="stylesheet" href="style2.css">
		<link href="responsive.css" rel="stylesheet" media="screen">		
	</head>

	<body>
	

		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
				<div class="clearfix main_content floatleft">
					<?php  
					$idTin = $_GET['idTin'];
					$str_tin = "select * from tin where AnHien = 1 and idTin = $idTin";
					$result_tin = $conn->query($str_tin);
					$rows = $result_tin->fetch_assoc();
					$idLT = $rows['idLT'];
					?>
						<div class="clearfix content">
							<div class="content_title"><h2><?php echo $rows['TieuDe']; ?></h2></div>
							<div class="single_work_page clearfix">
								<div class="work_single_page_feature"><img src="<?php echo "admin/uploads/".$rows['urlHinh']; ?>"/></div>
								<div class="single_work_page_content">
								<strong> <?php echo $rows['TomTat']; ?></strong>
								<?php echo $rows['Noidung']; ?>
								</div>
							</div>
						</div>
					<?php
					
					?>
					<div class="clearfix content">
							<div class="more_works">
								<h2>More Works you may like <i class="fa fa-thumbs-o-up"></i></h2>
								<div class="more_works_container">
									<?php echo relate_post($conn, $idLT,$idTin); ?>
									<!-- <div class="single_more_works floatleft">
										<img src="http://dummyimage.com/220x150/000/fff&text=Thumbnail" alt=""/>
										<a href=""><h2>Magazine Wp Template</h2></a>
									</div>
									<div class="single_more_works floatleft">
										<img src="http://dummyimage.com/220x150/000/fff&text=Thumbnail" alt=""/>
										<a href=""><h2>Magazine Wp Template</h2></a>
									</div> -->

								</div>
							</div>
					</div>
					
				</div>
				<div class="clearfix sidebar_container floatright">
				
					<div class="clearfix newsletter">
						<form>
							<h2>Signup for newsletter</h2>
							<input type="text" placeholder="Name" id="mce-TEXT"/>
							<input type="email" placeholder="Name" id="mce-EMAIL"/>
							<input type="submit" value="Submit" id="mc-embedded-subscribe"/>
						</form>
					</div>
					<div class="clearfix sidebar">
						<div class="clearfix single_sidebar category_items">
							<h2>Categories</h2>
							<ul>
								<?php echo list_categories($conn); ?>
							</ul>
						</div>
						<div class="clearfix single_sidebar">
							<div class="popular_post">
								<div class="sidebar_title"><h2>Most Popular</h2></div>
								<ul>
									<?php popular_post($conn); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="footer_top_area">
			<div class="clearfix wrapper footer_top">
				<div class="clearfix footer_top_container">
					<div class="clearfix single_footer_top floatleft">
						<h2>From Twitter</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="">Lorem Ipsum has been the industry</a> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="clearfix single_footer_top floatleft">
						<h2>Recent Post</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy <a href="">Lorem Ipsum has been the industry</a> text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</div>
					<div class="clearfix single_footer_top floatleft">
						<h2>Usefull Links</h2>
						<ul>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
							<li><a href="">Important links of this site</a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section id="footer_bottom_area">
			<div class="clearfix wrapper footer_bottom">
				<div class="clearfix copyright floatleft">
					<p> Copyright &copy; All rights reserved by <span>Wpfreeware.com</span></p>
				</div>
				<div class="clearfix social floatright">
					<ul>
						<li><a class="tooltip" title="Facebook" href=""><i class="fa fa-facebook-square"></i></a></li>
						<li><a class="tooltip" title="Twitter" href=""><i class="fa fa-twitter-square"></i></a></li>
						<li><a class="tooltip" title="Google+" href=""><i class="fa fa-google-plus-square"></i></a></li>
						<li><a class="tooltip" title="LinkedIn" href=""><i class="fa fa-linkedin-square"></i></a></li>
						<li><a class="tooltip" title="tumblr" href=""><i class="fa fa-tumblr-square"></i></a></li>
						<li><a class="tooltip" title="Pinterest" href=""><i class="fa fa-pinterest-square"></i></a></li>
						<li><a class="tooltip" title="RSS Feed" href=""><i class="fa fa-rss-square"></i></a></li>
						<li><a class="tooltip" title="Sitemap" href=""><i class="fa fa-sitemap"></i> </a></li>
					</ul>
				</div>
			</div>
		</section>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>	
		<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>		
		<script type="text/javascript">
			$(document).ready(function() {
				$('.tooltip').tooltipster();
			});
		</script>
		<script type="text/javascript" src="js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>		
		<script src="js/pgwslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.pgwSlider').pgwSlider({
					
					intervalDuration: 5000
				
				});
			});
		</script>
		
<!--

This Template is designed by WpFreeware.com Team, You are allowed to change anything you like.
Find out More Awesome template at http://www.WpFreeware.com.

-->	

	</body>
</html>
