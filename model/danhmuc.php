<?php
//insert danh mục
function insert_danhmuc($tenloai){
    $sql = "insert into danhmuc (name) value ('$tenloai')";
    pdo_execute($sql);
}

//delete danh mục
function delete_danhmuc($id){
    $sql = "delete from danhmuc where id = $id";
    pdo_execute($sql);
}

//load tất cả danh mục
function loadall_danhmuc(){
    $sql = "select*from danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

//load 1 danh mục
function loadone_danhmuc($id){
    $sql = "select * from danhmuc where id = $id";
    $dm = pdo_query_one($sql);
    return $dm;
}

//update danh mục
function update_danhmuc($tenloai,$id) {
    $sql = "update danhmuc set name = '$tenloai' where id = $id";
    pdo_execute($sql);
}
?>