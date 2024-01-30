<main class="catalog  mb ">

<div class="boxleft">

  <div class="box_title">Đăng ký thành viên</div>
  <div class="box_content form_account">
    <form action="index.php?act=dangky" method="post">
      <div>
        <p>Email</p>
        <input type="email" name="email" placeholder="email">
      </div>
      <div>
        Tên đăng nhập
        <input type="text" name="user"  placeholder="user">
      </div>
      Mật khẩu
      <div>
        <input type="password" name="pass"  placeholder="pass">
      </div>
      <input type="submit" value="Đăng ký" name="dangky">
      <input type="reset" value="Nhập lại">
    </form>
  </div>
  <h4 style="color:black;">
    <?php
    if($thongbao !="" && isset($thongbao)){
        echo $thongbao;
    }else{
      echo "";
    }
    ?>

  </h4>
  </div>
  <?php
include "view/boxright.php";
?>
</div>
</div>
</div>



