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
                    $idLT = $_GET['idLT'];
					$str_page = "select * from tin where AnHien = 1 and idLT = $idLT";
					$result_page = $conn->query($str_page);

					$tongsobaiviet = $result_page->num_rows;
                    $sobaitrenmoitrang = 2;
                    $sotrang = $tongsobaiviet / $sobaitrenmoitrang;

                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page = 0;
                    }

                    $vitrilaytin = $page * $sobaitrenmoitrang;

                    $str = "select * from tin where idLT = $idLT and AnHien = 1 order by idTin desc limit $vitrilaytin, $sobaitrenmoitrang";
                    $result = $conn->query($str);

					while($rows = $result->fetch_assoc()){ ?>
                    <div class="clearfix single_content">
                        <div class="clearfix post_detail">
                            <h2><a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>">
							<?php echo $rows['TieuDe']; ?> </a></h2>
                            <div class="clearfix post-meta">
                                <p>
                                <span><i class="fa fa-user"></i> <?php echo get_user($conn, $rows['idUser']); ?></span> 
                                <span><i class="fa fa-clock-o"></i> <?php echo $rows['Ngay']; ?></span>
                                <span><a href=""><i class="fa fa-folder"></i> <?php echo get_ltin($conn, $rows['idLT']); ?></a></span>
                                </p>
                            </div>
                            <div class="clearfix post_excerpt">
                                <img src="<?php echo "admin/uploads/".$rows['urlHinh']; ?>" alt=""/>
                                <p> 
                                    <?php echo $rows['TomTat']; ?>
                                </p>
                            </div>
                            <a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>" 
            				target="_blank"">Continue Reading</a>
                        </div>
						
                    </div>                        
                    <?php }
					?>
					<div class="">
                            <b>Trang</b>
                            <?php
                              for($i=0; $i<$sotrang; $i++){ ?> 
                              <a href="loaitin.php?idLT=<?php echo $idLT; ?>&page=<?php echo $i; ?>"><?php echo ($i+1); ?></a>
                              <?php }
                            ?>
                          </div>
					</div>		
					<!-- End latest content  -->
					
				</div>

			<!-- End  main_content -->
			<?php include "sidebar.php"; ?>
				
			</div>
		</section>

<?php include "footer.php"; ?>		