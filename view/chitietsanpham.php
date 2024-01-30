<main class="catalog  mb ">
  <?php
  extract($ctsp);
  ?>
  <div class="boxleft">
    <div class=" mb">
      <div class="box_title">CHI TIẾT SẢN PHẨM</div>
      <div class="box_content">
        <h1 style="text-align:center">
          <?= $name ?>
        </h1>
    
        <img src="upload/<?= $img ?>"  style="display:block;margin:auto;width:100%;height: 500px;">
      </div>
      <div class="box_content">
        <h2>Mô tả</h2>
        <?= $mota ?>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
          $("#binhluan").load("view/binhluan/binhluan.php", { idpro: <?= $id ?> });
      });
    </script>
    <div class="mb">
      <div class="box_title">BÌNH LUẬN</div>
      <div class="box_content2  product_portfolio binhluan " id="binhluan">

      </div>
      <!-- <div class="box_search">
        <form action="" method="POST">
          <input type="hidden" name="idpro" value="">
          <input type="text" name="noidung">
          <input type="submit" name="guibinhluan" value="Gửi bình luận">
        </form>
      </div> -->

    </div>

    <div class=" mb">
      <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
      <div class="box_content">
        <?php
        foreach ($sp_cungloai as $sp_cungloai) {
          extract($sp_cungloai);
          $linkdm = "index.php?act=chitietsp&idsp=$id";
          ?>
          <li><a href="<?= $linkdm ?>">
              <?= $name ?>
            </a></li>
        <?php } ?>
      </div>
    </div>
  </div>

  <?php include "view/boxright.php" ?>

  </div>

</main>