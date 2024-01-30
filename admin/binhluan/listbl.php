<div class="row2">
    <div class="row2 font_title" style="margin-bottom:20px">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung bình luận</th>
                        <th>ID USER</th>
                        <th>ID Pro</th>
                        <th>Ngày bình luận</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listbl as $binhluan) {
                        extract($binhluan);
                        $suabl = '../index.php?act=suabl&id=' . $id;
                        $xoabl = 'index.php?act=xoabl&id=' . $id;
                        ?>

                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>
                                <?= $id ?>
                            </td>
                            <td>
                                <?= $noidung ?>
                            </td>
                            <td>
                                <?= $iduser ?>
                            </td>
                          
                            <td>
                                <?= $idpro ?>
                            </td>
                            <td>
                                <?= $ngaybinhluan ?>
                            </td>
                            <td>
                                <a href="<?= $xoabl ?>">
                                    <input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
    </div>
</div>




</div>