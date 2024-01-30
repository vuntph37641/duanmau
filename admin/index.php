<?php
include "header.php";
include_once "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'danhmuc':
            include "danhmuc/add.php";
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                header("location:index.php");
            }
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "content.php";
            break;

        case 'xoadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "content.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                $dm = loadone_danhmuc($id);
            }
            if (isset($_POST['sua'])) {
                $tenloai = $_POST['tenloai'];
                update_danhmuc($tenloai, $_GET['id']);
                header("location:index.php");
            }
            include "danhmuc/update.php";
            break;
        //end danh muc
//san pham
        case 'addsp':
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            if (isset($_POST['themmoi']) && $_POST['themmoi']) {
                $tensp = $_POST['tensp'];
                $price = $_POST['price'];

                $img_name = $_FILES['img']['name'];
                $img_tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($img_tmp, "../upload/" . $img_name);

                $mota = $_POST['mota'];
                $iddm = $_POST['iddm'];
                insert_sanpham($tensp, $price, $img_name, $mota, $iddm);
                header("location:index.php?act=listsp");
            }
            break;


        case 'listsp':
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sp();
            if (isset($_POST['loc']) && $_POST['loc']) {
                $sreach = $_POST['sreach'];
                $iddm = $_POST['iddm'];
                $listsanpham = loc_sanpham($sreach, $iddm);
            } else {
                $sreach = "";
                $iddm = 0;
            }
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sp();
            include "sanpham/list.php";
            break;

        case 'suasp':
            $listdanhmuc = loadall_danhmuc();
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $idsp = $_GET['id'];
                $dmsp = loadone_sp($idsp);
            }
            if (isset($_POST['suasp'])) {

                $tensp = $_POST['tensp'];
                $price = $_POST['price'];

                $iddm = $_POST['iddm'];

                $img_name = $_FILES['img']['name'];
                $img_tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($img_tmp, "../upload/" . $img_name);

                $mota = $_POST['mota'];

                update_sanpham($idsp, $tensp, $price, $img_name, $mota, $iddm);
                header("location:index.php?act=listsp");
            }
            include "sanpham/update.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/listtk.php";
            break;
        case 'dsbl':
            $listbl = loadall_binhluan(0);
            include "binhluan/listbl.php";
            break;
        case 'thongke':
                $listthongke = loadall_thongke();
                include "thongke/list.php";
                break;
        case 'bieudo':
                    $listthongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;
        case 'xoabl':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_binhluan($_GET['id']);
                header("location:index.php?act=dsbl");
            }
            break;
        case 'xoatk':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                delete_taikhoan($_GET['id']);
                header("location:index.php?act=dskh");
            }
            break;
    }
} else {
    $listdanhmuc = loadall_danhmuc();
    include "content.php";
}

include "footer.php";