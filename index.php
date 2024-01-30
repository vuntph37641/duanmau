<?php
session_start();
include "view/header.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
$sp_trangchu = loadallsp_content();
$listdanhmuc = loadall_danhmuc();
$top5_luotxem = top5_luotxem();
if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'chitietsp':
            if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                $id = $_GET['idsp'];
                $ctsp = loadone_sp($id);
                extract($ctsp);
                $sp_cungloai = load_onesp_cungloai($id, $iddm);
                include "view/chitietsanpham.php";
            } else {
                include "view/content.php";
            }

            break;

        case 'sanpham':
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loc_sanpham($kyw, $iddm);
            $tendm = load_ten_dmsp($iddm);
            include "view/sanpham.php";
            break;

        case 'dangky':
            $thongbao = "";
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                $thongbao = "Đã đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            $thongbao = "";
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    header("location:index.php");
                } else {
                    $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra lại hoặc đăng ký";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && $_POST['capnhat']) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];

                update_taikhoan($id, $user, $pass, $address, $tel);
                $_SESSION['user'] = check_user($user, $pass); //cập nhật lại session mới
                header("location:index.php?act=edit_taikhoan");
                // unset($_SESSION['user']);
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            $thongbao="";
            if (isset($_POST['guiemail']) && $_POST['guiemail']) {
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là: " . $check_email['pass'];
                } else {
                    $thongbao = "Email này ko tồn tại";
                }
            }
            include "view/taikhoan/quenmatkhau.php";
            break;

        case 'thoat':
            session_unset(); //xóa hết session
            header('location:index.php');
            break;
     
        default:
            # code...
            break;
    }
} else {
    include "view/content.php";
}
include "view/footer.php";
?>