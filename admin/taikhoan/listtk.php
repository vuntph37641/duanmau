<div class="row2">
    <div class="row2 font_title" style="margin-bottom:20px">
        <h1>Danh Sách Tài Khoản</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MãTK</th>
                        <th>User Name</th>
                        <th>Pass</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>SDT</th>
                        <th>Role (Vai Trò)</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = '../index.php?act=edit_taikhoan&id=' . $id;
                        $xoatk = 'index.php?act=xoatk&id=' . $id;
                        ?>

                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>
                                <?= $id ?>
                            </td>
                            <td>
                                <?= $user ?>
                            </td>
                            <td>
                                <?= $pass ?>
                            </td>
                          
                            <td>
                                <?= $email ?>
                            </td>
                            <td>
                                <?= $address ?>
                            </td>
                            <td>
                                <?= $tel ?>
                            </td>
                            <td>
                                <?= $role ?>
                            </td>


                            <td>
                                <a href="<?= $suatk ?>"><input type="button" value="Sửa"></a>
                                <a href="<?= $xoatk ?>">
                                    <input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="../index.php?act=dangky"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>