<div class="boxright">

  <div class="mb">
    <div class="box_title">TÀI KHOẢN</div>
    <div class="box_content form_account">
      <?php if (isset($_SESSION['user'])) { 
        extract($_SESSION['user']);  
      ?>
        <form action="index.php?act=dangnhap" method="POST">
          <h4>Xin chào <?= $user ?></h4><br>
          <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
          <li class="form_li"><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>  
          <?php if($role==0){?>
            <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
          <?php }?>
          <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>
        </form>
      <?php } else { ?>
        <form action="index.php?act=dangnhap" method="POST">
          <h4>Tên đăng nhập</h4><br>
          <input type="text" name="user" id="">
          <h4>Mật khẩu</h4><br>
          <input type="password" name="pass" id=""><br>
          <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
          <br><input type="submit" value="Đăng nhập" name='dangnhap'>
          <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
          <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
        </form>
      <?php } ?>
    </div>
  </div>
  <div class="mb">
    <div class="box_title">DANH MỤC</div>
    <div class="box_content2 product_portfolio">
      <ul>
        <?php foreach ($listdanhmuc as $dm) {
          extract($dm);
          $linkdm = "index.php?act=sanpham&iddm=" . $id;
          ?>
          <li><a href="<?= $linkdm ?>">
              <?= $name ?>
            </a></li>
        <?php } ?>
      </ul>
    </div>
    <div class="box_search">
      <form action="index.php?act=sanpham" method="POST">
        <input type="text" name="kyw" id="" placeholder="Từ khóa tìm kiếm">
        <input type="submit" value="Tìm kiếm" name="timkiem">
      </form>
    </div>
  </div>
  <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
  <div class="mb">
    <div class="box_title">Top 5 lượt xem</div>
    <div class="box_content">
      <?php foreach ($top5_luotxem as $top5) {
        extract($top5);
        $linksp = "index.php?act=chitietsp&idsp=".$id;
        ?>
        <div class="selling_products" style="width:100%;">
          <img src="./upload/<?= $img ?>" alt="anh">
          <a href="<?= $linksp ?>">
            <?= $name ?>
          </a>
        </div>
      <?php } ?>
      <!-- <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
      <div class="selling_products" style="width:100%;">
        <img src="./img/clockforgirl.jpg" alt="anh">
        <a href="">Đồng hồ đeo tay nữ</a>
      </div>
    </div> -->
    </div>