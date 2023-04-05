<?php
function get_theloai($idTL,$conn){
    $str = "select * from theloai where idTL = $idTL";
    $result = $conn->query($str);
    if($result->num_rows !=0){
        $row = $result->fetch_assoc();
        return $row['TenTL'];
    }else{
        return "Thể loại không tồn tại";
    }
    
}

function get_loaitin($idLT,$conn){
    $str = "select * from loaitin where idLT = $idLT";
    $result = $conn->query($str);
    if($result->num_rows !=0){
        $row = $result->fetch_assoc();
        return $row['Ten'];
    }else{
        return "Thể loại không tồn tại";
    }
    
}

function list_record($conn, $arrs){
    $table = $arrs['table'];
    $field_print = $arrs['field_print'];
    $field_value = $arrs['field_value'];
    $str = "select * from $table";
    $result = $conn->query($str);
    while($rows = $result->fetch_assoc()){ ?>
    <option value="<?php echo $rows[$field_value]; ?>">
    <?php echo $rows[$field_print]; ?>
    </option>
    <?php }
}


?>
