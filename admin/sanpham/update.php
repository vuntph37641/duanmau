<?php
if (is_array($dmsp)) {
  extract($dmsp);
  $idsp=$iddm; //idsp bằng iddm của db sản phẩm 
}
?>
<div class="row2">
  <div class="row2 font_title">
    <h1>Sửa Sản phẩm</h1>
  </div>
  <div class="row2 form_content ">
    <form action="#" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10 form_content_container">
        <label> Mã sản phẩm </label> <br>
        <input type="text" name="idsp" disabled value=<?= $id ?>>
      </div>
      <div class="row2 mb10">
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="tensp" placeholder="nhập vào tên" value=<?= $name ?>>
      </div>
      <div class="row2 mb10">
        <label>Giá </label> <br>
        <input type="text" name="price" placeholder="nhập vào giá" value=<?= $price ?>>
      </div>
      <div class="row2 mb10">
        <label>Hình</label> <br>
        <img src="../upload/<?= $img ?>" alt="" style="width:200px">
        <input type="file" name="img">
      </div>
      <div class="row2 mb10">
        <label>Mô tả </label> <br>
        <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
      </div>
      <div class="row2 mb10">
        <label>id danh muc </label> <br>
        <select name="iddm" id="">
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            ?>
            <option value="<?= $id ?>" <?=($id)==($idsp)?"selected":"" ?>>
              <?= $name ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="row mb10 ">
        <input class="mr20" type="submit" value="Sửa" name="suasp">
        <input class="mr20" type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
      </div>
    </form>
  </div>
</div>