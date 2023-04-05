<?php

function get_loaitin($idLT,$conn){
    $str = "select * from loaitin where idLT = $idLT";
    $result = $conn->query($str);
    if($result->num_rows !=0){
        $row = $result->fetch_assoc();
        return $row['Ten'];
    }else{
        return "Loại tin không tồn tại";
    }
    
}

function get_user($conn,$id){
   $iduser  = $id; // idTL hoac idLT
   $result = $conn->query("select * from users where idUser =$id");
   $row = $result->fetch_assoc();
   return $row['Username'];
}
function get_ltin($conn,$id){
   $idloaitin  = $id; 
   $result = $conn->query("select * from loaitin where idLT =$id");
   $row = $result->fetch_assoc();
   return $row['Ten'];
}

function show_news_category($conn, $arrs){ 
    $id = $arrs['id']; // idTL hoac idLT
    $field_id = $arrs['field_id']; // Truong truy van 01
    $table = $arrs['table']; // ten bang can truy van
    $condition_filter = $arrs['condition_filter']; //// Truong truy van 02/ An Hien

    $str = "select * from $table where $field_id = '$id' 
    and $condition_filter = 1 order by Ngay desc limit 0,5  ";
    $result = $conn->query($str);
    while($rows = $result->fetch_assoc()){ 
    ?>

    <div class="clearfix single_content">
        <div class="clearfix post_detail">
            <h2><a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>" 
            target="_blank"><?php echo $rows['TieuDe']; ?> </a>
            </h2>
            <div class="clearfix post-meta">
                <p>
                <span><i class="fa fa-user"></i> <?php echo get_user($conn, $rows['idUser']); ?></span> 
                <span><i class="fa fa-clock-o"></i> <?php echo $rows['Ngay']; ?></span>
                <span> 
                    <a href="loaitin.php?idLT=<?php echo $rows['idLT'] ?>"><i class="fa fa-folder"></i> 
                        <?php echo get_ltin($conn, $rows['idLT']); ?>
                    </a>
                </span>
                </p>
            </div>
            <div class="clearfix post_excerpt">
                <img src="<?php echo "admin/uploads/".$rows['urlHinh']; ?>" alt=""/>
                <p> 
                    <?php echo $rows['TomTat']; ?>
                </p>
            </div>
            <a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>" 
            target="_blank">Continue Reading</a>
        </div>
    </div>
    <?php }
    ?>
    <?php }



function list_categories($conn){
    $str = "select * from theloai where AnHien = 1";
    $result = $conn->query($str);
    while( $rows = $result->fetch_assoc() ){ 
    $idtheloai = $rows['idTL'];
    ?>
    <li class="cat-item">
        <a href="theloai.php?idTL=<?php echo $idtheloai; ?>" target="_blank">
            <?php echo $rows['TenTL']; ?>
        </a>●
    </li>
    <?php 
}
}

function popular_post($conn){
    $str_loaitin = "select * from tin where AnHien = 1  order by idTin desc limit 0,10"; 
    $result_loaitin = $conn->query($str_loaitin);
    while($rows = $result_loaitin->fetch_assoc()){ ?>
        <li><a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>" target="_blank">
        <h4><?php echo $rows['TieuDe']; ?></h4>
        <span><?php echo $rows['Ngay']; ?></span>
        </a></li>
    <?php }
}

function works($conn){
    $str_ltin = "select * from tin where AnHien = 1  order by idTin desc limit 0,3"; 
    $result_ltin = $conn->query($str_ltin);
    while($rows = $result_ltin->fetch_assoc()){ ?>
        
        <div class="single_more_works floatleft">
            <img src="<?php echo "admin/uploads/".$rows['urlHinh']; ?>" alt=""/>
            <a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>" target="_blank">
        <h2><?php echo $rows['TieuDe']; ?></h2>
        </a>
		</div>
    <?php }
}

function relate_post($conn,$id,$idtin){
    $str_ltin = "select * from tin where AnHien = 1 and  idLT = $id and idTin not in ($idtin) order by idTin desc limit 0,3"; 
    $result_ltin = $conn->query($str_ltin);
    while($rows = $result_ltin->fetch_assoc()){ ?>
        
        <div class="single_more_works floatleft">
            <img src="<?php echo "admin/uploads/".$rows['urlHinh']; ?>" alt=""/>
            <a href="single-works.php?idTin=<?php echo $rows['idTin']; ?>" target="_blank">
        <h2><?php echo $rows['TieuDe']; ?></h2>
        </a>
		</div>
    <?php }
}
?>		
    	


 