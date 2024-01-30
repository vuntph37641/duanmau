<?php
if(is_array($dm)){
    extract($dm);
}
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>Sửa Loại Hàng Hóa</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="maloai" disabled value="<?= $id ?>">
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="tenloai" placeholder="nhập vào tên" value="<?= $name ?>">
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" value="Sửa" name="sua">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>