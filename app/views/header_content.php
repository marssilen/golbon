    <p>
    <h2 class="w3-left">
      <a href="<?= URL ?>"><img src="<?= URL ?>public/logo.png"/></a>
    </h2>
    <?php if(!$this->is_login){ ?>
    <a href="<?= LINK ?>"  <?= LOGIN ?> >وارد شوید | ثبت نام کنید</a>
<!--    <a href="--><?//= URL ?><!--signup" class="w3-margin-16">ثبت نام کنید</a>-->
    <?php }else{
      $m=$this->model('Item_m');
      $fid=$m->get_factor(Session::get('id'));
       ?>
      <a href="<?= URL ?>cp" >مدیریت کاربری <i><?=display(Session::get('username'))?></i></a>
      <a href="<?= URL ?>cp/logout" class="w3-margin-16">خروج</a>
    <?php } ?>
    <a href="<?= (($this->is_login)?URL."cp/factor_review/$fid":LINK) ?>" <?= (($this->is_login)?"":LOGIN) ?>
      class="w3-large w3-btn w3-green w3-round" style="margin-right: 15px"><i class="fa fa-shopping-bag"></i>   سبد خرید
      <span class="w3-margin-2 w3-round w3-tag w3-light-green" id="tedad">
      <?= ($this->is_login)?display($m->count_items_in_basket($fid)):"" ?>
      <?php

      ?>
    </span>
    </a>
