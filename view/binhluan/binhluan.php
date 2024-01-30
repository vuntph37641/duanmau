<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<style>
    .binhluan {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="mb">
        <div class="box_title">Bình luận</div>
        <div class="box_content2 product_portfolio">
            <table class='binhluan'>
                <tr>
                    <td>Nội dung</td>
                    <td>iduser</td>
                    <td>ngay binh luan</td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <?php
                foreach ($dsbl as $dsbl) {
                    extract($dsbl);
                    ?>
                    <tr>
                        <td>
                            <?= $noidung ?>
                        </td>

                        <td>
                            <?= $iduser ?>
                        </td>
                        <td>
                            <?= $ngaybinhluan ?>
                        </td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="box_search">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name='idpro' value='<?= $idpro ?>'>
                <input type="text" name="noidung">
                <input type="submit" value="gửi bình luận" name="guibinhluan">
            </form>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && $_POST['guibinhluan']) {
            $noidung = $_POST['noidung'];
            $iduser = $_SESSION['user']['id'];
            $idpro = $_POST['idpro'];
            $ngaybinhluan = date('h:i:sa m/d/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("location:" . $_SERVER['HTTP_REFERER']);          
        }
        ?>
    </div>

</body>

</html>