<?php require_once('app/views/head.php'); ?>

<body xmlns="http://www.w3.org/1999/html">
<?php require_once('app/views/header.php'); ?>
<?php require_once('app/views/menu.php');
$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s://" : "://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<br>
<div class="w3-card-2 w3-white container">
  <!-- w3-row w3-card-2  -->
<?php require_once('app/views/msgbox.php'); ?>
<div class="w3-col m8 s12">
    <p class="price1 w3-margin-32 w3-round-medium w3-light-grey w3-container">
        <?= $data['name'] ?>
    </p>
<div class="w3-margin-32 w3-container w3-padding-16" id="columnTwo"
     style="background: url('http://localhost/golbon/public/water.png');
            background-size: 100% 100%;
">

<?= $data['long_description'] ?>

    <p class="price1">
        قیمت  :<?= $data['price'] ?>
    </p>
    <input type="hidden" name="id" value="<?= $data['id'] ?>"/>

<button id="buy_btn" class="w3-green w3-round" type="submit" name="submit" style="border: none;padding: 8px">افزودن به سبد خرید</button>
</div>
</div>
<div class="w3-col s12 m4 w3-center" >
<div style="" class=" w3-margin-32 w3-padding-16" id="columnOne">
    <form enctype="multipart/form-data" id="form">
<p style="text-align: left">

<a href="javascript:void(0)" id="fav_btn"><i id="fav_button" class="w3-xlarge fa fa-heart" style="color: red"></i></a>
        <input type="hidden" name="id" value="<?= $data['id'] ?>"/>


</p></form>
<div class="w3-center w3-red"><img style="width:100%" src="<?= URL.'public/upload/'.$data['card_image']?>"  /></div>
<div class=" w3-padding-8" style="margin-top:20px">
<?php
$images=$data['image'];
foreach ($images as $image) {
  // echo $image['image'];
  // echo $image['id'];
  // echo $image['image_thumb'];
  // echo $image['item_id'];
?>
    <img onclick="show_modal('<?= URL.'public/upload/'.$image['image']?>')" src="<?= URL.'public/upload/'.$image['image_thumb']?>" class="w3-hover-opacity" width="50" height="50" />
<?php } ?>
</div>
<div class="w3-margin-16 w3-round">
  به اشتراک بگذارید
  <p>
  <a target="_blank" href="https://t.me/share/url?url=<?= $url ?>&text=Golbon">
  <img src="<?= URL ?>public/t.png" width="50" height="50" class="w3-circle">
  </a>
  <a target="_blank" href="https://twitter.com/home?status=<?= $url ?>">
  <img src="<?= URL ?>public/twitter.jpg" width="50" height="50" class="w3-circle">
  </a>
  <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?= $url ?>">
    <img src="<?= URL ?>public/face.png" width="50" height="50" class="w3-circle">
  </a>
  </p>
  <!-- <img src="<?= URL ?>public/twitter.jpg" width="50" height="50" class="w3-circle">
  <img src="<?= URL ?>public/face.png" width="50" height="50" class="w3-circle"> -->
</div>
<!--style="width:100%"-->
</div>

</div>

</div>

<script>
function show_modal(src){
  document.getElementById('modalimg').style.display='block';
  document.getElementById('img-mod').src=src;
}
</script>






<div id="modalimg" class="w3-modal w3-animate-zoom w3-center" onclick="this.style.display='none'">
  <img id="img-mod" class="w3-modal-content" src="<?= URL.'public/upload/a_22.png'?>">
</div>


<div class="w3-blue-grey" style="margin-top:20px">
  فوتر
</div>
</body>
</html>
