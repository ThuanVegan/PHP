<?php include "header.php"; ?>		
		
		<section id="content_area">
			<div class="clearfix wrapper main_content_area">
			
				<div class="clearfix main_content floatleft">
				
					<div class="clearfix slider">
						<ul class="pgwSlider">
							<li><img src="images/thumbs/hinh-dang-moi-16782812578711687519736-1678290780484-16782907805682014853827.jpg" alt="Khám phá vũ trụ" data-description="Lõi trái đất" data-large-src="images/slides/98233454-16775744438971186100835-1677581410101-1677581410777586725483.jpg"/></li>
							<li><img src="images/thumbs/3-1613530203157-16136351098231589380440.jpg" alt="Khí hậu" data-large-src="images/slides/5-1613530328883-1613635183283460555664.jpg" data-description="Bão tuyết"/></li>
							<li>
								<img src="images/thumbs/Tìm hiểu 8 nét đặc sắc của văn hóa Nhật Bản (3).png" alt="Văn hóa" data-large-src="images/slides/Tìm hiểu 8 nét đặc sắc của văn hóa Nhật Bản (1).png" data-description="Nhật Bản">
							</li>


						</ul>
					</div>

					<!-- End slider -->
					
					<div class="clearfix content">
					<?php
					$str = "select * from theloai where AnHien = 1";
					$result = $conn->query($str);
					while( $row = $result->fetch_assoc() ){
						$idTL =$row['idTL']; 
						?>
						<div class="content_title"><h2><?php echo $row['TenTL']; ?></h2></div>
						<?php 
						$arr = array(
							'id' => $idTL,
							'field_id' => 'idTL',
							'table' => 'tin',
							'condition_filter'=>'AnHien'
						);
						show_news_category($conn,$arr);
						?>
					<?php	}
					?>
					</div>		
					<!-- End latest content  -->
					
				
				</div>

			<!-- End  main_content -->
			<?php include "sidebar.php"; ?>
				
			</div>
		</section>

<?php include "footer.php"; ?>		