
<link rel="stylesheet" href="./css/specialstyle.css">
<link rel="stylesheet" href="style2.css">
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
					<?php echo popular_post($conn); ?>
				</ul>
			</div>
		</div>
	</div>
</div>