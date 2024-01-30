<div class="row2">
    <div class="row2 font_title" style="margin-bottom:20px">
        <h1>Danh Sách Sản Phẩm</h1>
    </div>
    <form action="index.php?act=listsp" method="post" style="margin-top:20px">
        <input type="text" name="sreach" style="width:250px ;height:30px;margin-bottom:20px">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                ?>
                <option value="<?= $id ?>">
                    <?= $name ?>
                </option>
            <?php } ?>
        </select>
        <input type="submit" value="Lọc" name='loc' style="width:50px">
    </form>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <tr>
                        <th></th>
                        <th>MãSP</th>
                        <th>TênSP</th>
                        <th>GiáSP</th>
                        <th>HìnhSP</th>
                        <th>Mô Tả</th>
                        <th>Lượt Xem</th>
                        <th>Iddm</th>
                        <th>Sửa Xóa</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = 'index.php?act=suasp&id=' .$id;
                        $xoasp = 'index.php?act=xoasp&id=' .$id;
                        ?>

                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>
                                <?= $id ?>
                            </td>
                            <td>
                                <?= $name ?>
                            </td>
                            <td>
                                <?= $price ?>
                            </td>
                            <td><img src="../upload/<?= $img ?>" alt="" style="width:120px;height:120px;border-radius:10px">
                            </td>
                            <td style="width:280px;text-align:justify">
                                <?= $mota ?>
                            </td>
                            <td>
                                <?= $luotxem ?>
                            </td>
                            <td>
                                <?= $iddm ?>
                            </td>
                            
                            <td>
                                <a href="<?= $suasp ?>"><input type="button" value="Sửa"></a>
                                <a href="<?= $xoasp ?>">
                                <input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>