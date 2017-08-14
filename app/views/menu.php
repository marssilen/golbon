<?php
$menu_list=$this->model('Menu_m')->get_menu();
?>
<div class="w3-dark-grey" style="background: linear-gradient(#7e7e7e, #a3a3a3, #7e7e7e);">
    <button id="menubtn" onclick="$('#menu').toggle(100);">☰</button>
    <ul id="menu" class="w3-navbar" style="margin-right: 32px;">
    <?php foreach($menu_list as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
        <li class="w3-right"><a class="w3-hover-none w3-text-white w3-hover-text-white" href="<?=$menu['href']?> "><?= $menu['menu'] ?></a></li>
        <?php } ?>
    <?php } ?>
       <!-- <li><a class="w3-hover-none w3-text-black" href="#">Home</a></li> -->
</ul>
</div>
