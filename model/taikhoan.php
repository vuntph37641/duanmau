<?php
//insert tài khoản
function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan (email,user,pass) value ('$email','$user','$pass')";
    pdo_execute($sql);
}

//check user
function check_user($user, $pass)
{
    $sql = "select * from taikhoan where user = '$user' and pass = '$pass'";
    $kq_ad = pdo_query_one($sql);
    return $kq_ad;
}

//check email

function check_email($email)
{
    $sql = "select * from taikhoan where email = '$email'";
    $kq_em = pdo_query_one($sql);
    return $kq_em;
}

//update tài khoản
function update_taikhoan($id, $user, $pass, $address, $tel)
{
    $sql = "update taikhoan set user = '$user', pass = '$pass',address='$address',tel='$tel' where id = $id";
    pdo_execute($sql);
}

//load all tài khoản
function loadall_taikhoan(){
    $sql = "select*from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
//xóa tài khoản
function delete_taikhoan($id){
    $sql = "delete from taikhoan where id = $id";
    pdo_execute($sql);
}
?>