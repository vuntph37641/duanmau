<main class="catalog  mb ">

    <div class="boxleft">

        <div class="box_title">Cập nhật</div>
        <div class="box_content form_account">
            <form action="index.php?act=edit_taikhoan" method="post">
                <?php if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    ?>
                    <div>
                        <p>Email</p>
                        <input type="email" name="email" placeholder="email" value='<?= $email ?>'>
                    </div>
                    <div>
                        Tên đăng nhập
                        <input type="text" name="user" placeholder="user" value='<?= $user ?>'>
                    </div>
                    Mật khẩu
                    <div>
                        <input type="text" name="pass" placeholder="pass" value='<?= $pass ?>'>
                    </div>
                    Address
                    <div>
                        
                        <input type="text" name="address" placeholder="address" value='<?= $address ?>'>
                    </div>
                    Tel
                    <div>
                        <input type="text" name="tel" placeholder="tel" value='<?= $tel ?>'>
                    </div>
                    <input type="hidden" name='id' value='<?= $id ?>'>
                    <input type="submit" value="Cập nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                </form>
            <?php } ?>
        </div>
    </div>
    
    <?php
    include "view/boxright.php";
    ?>
    </div>
    </div>
    </div>