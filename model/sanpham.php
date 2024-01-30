<?php
//insert Sản phẩm
function insert_sanpham($tensp,$price,$img_name,$mota,$iddm){
    $sql = "insert into sanpham (name,price,img,mota,iddm) value ('$tensp','$price','$img_name','$mota','$iddm')";
    pdo_execute($sql);
}

//delete Sản phẩm
function delete_sanpham($id){
    $sql = "delete from sanpham where id = $id";
    pdo_execute($sql);
}

//
function loadall_sp(){
    $sql = "select*from sanpham order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//Lọc sản phẩm
function loc_sanpham($sreach,$iddm){
    $sql = "select*from sanpham where 1";
    if($sreach!=""){
        $sql.=" and name like '%".$sreach."%'";
    }
    if($iddm>0){
        $sql.=" and iddm = $iddm";
    }
    $sql.=" order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//load 1 Sản phẩm
function loadone_sp($id){
    $sql = "select * from sanpham where id = $id";
    $dmsp = pdo_query_one($sql);
    return $dmsp;
}

//load tên danh mục sp 
function load_ten_dmsp($iddm){
    if($iddm>0){
        $sql = "select * from danhmuc where id = $iddm";
        $dmsp = pdo_query_one($sql);
        extract($dmsp);
        return $name;
    }else{
        return "";
    }
   
}


//load sản phẩm cùng loại
function load_onesp_cungloai($id,$iddm){
    $sql = "select * from sanpham where iddm=$iddm and id <> $id";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//update Sản phẩm
function update_sanpham($idsp,$tensp,$price,$img_name,$mota,$iddm) {
        if($img_name!=""){
            $sql = "update sanpham set name = '$tensp', price = $price,img='$img_name',mota='$mota',iddm=$iddm where id = $idsp";
        }else{
            $sql = "update sanpham set name = '$tensp', price = $price,mota='$mota',iddm=$iddm where id = $idsp";
        }
    pdo_execute($sql);
}

//load all sản phẩm cho trang chủ
function loadallsp_content(){
    $sql = "select*from sanpham where 1 order by id desc limit 0,9";
    $sp_trangchu = pdo_query($sql);
    return $sp_trangchu;
}

//Top 10 lượt xem 
function top5_luotxem(){
    $sql = "select*from sanpham where 1 order by luotxem desc limit 0,5";
    $top5_luotxem = pdo_query($sql);
    return $top5_luotxem;
}
?>