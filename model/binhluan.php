<?php
//insert bình luận
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "insert into binhluan (noidung,iduser,idpro,ngaybinhluan) value ('$noidung',$iduser,$idpro,'$ngaybinhluan')";
    pdo_execute($sql);
}

//load tất cả Bình luận
function loadall_binhluan($idpro){
    $sql = "select*from binhluan ";
    if($idpro>0){
        $sql.="where idpro = $idpro order by id desc";
    }else{
        $sql.="order by id desc";
    }
   
    $listbl = pdo_query($sql);
    return $listbl;
}

//xóa bình luận
function delete_binhluan($id){
    $sql = "delete from binhluan where id = $id";
    pdo_execute($sql);
}
?>