<?php  ?>
<div class="w3-white w3-margin-32  ">
<!--<img src="<?= URL.'public/img/header.jpg'?>" class="" style="width:100%;max-width:400px"/>-->
    <p>
    <h2 class="w3-left">گلبن image</h2>
    <?php if(!$this->is_login){ ?>
    <a href="<?= URL ?>login" >وارد شوید</a>
    <a href="<?= URL ?>signup" class="w3-margin-16">ثبت نام کنید</a>
    <?php }else{ ?>
      <a href="<?= URL ?>cp" >مدیریت کاربری <i><?=display(Session::get('username'))?></i></a>
      <a href="<?= URL ?>cp/logout" class="w3-margin-16">خروج</a>
    <?php } ?>
    </p>
    <button class="w3-large w3-btn w3-green" type="submit" name="submit"><i class="fa fa-shopping-bag"></i>   سبد خرید<span class="w3-margin-2 w3-round w3-tag w3-light-green">
      <?= ($this->is_login)?"":"" ?>
    </span></button>
</div>
