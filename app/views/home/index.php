<!doctype html>
<html lang="fa">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= URL ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= URL ?>public/w3.css">
<!--<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">-->
<link rel="stylesheet" href="<?= URL ?>public/mycss.css">
<link rel="stylesheet" href="<?= URL ?>public/font/font.css">

<!-- jQuery library -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/myscript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>فراورده های کنجدی گلبن</title>
<style>
    body, h3{
        font-family: 'Yekan' ;
	/*font-size: 15px;*/
        text-align: right;
        direction: rtl;
    }
    .price1{
       font-size: 25px;
    }
    .pad{
      padding: 5px;
    }
    .image{
      width:100%;
      border-radius: 4px 4px 0px 0px;
    }
</style>
</head>
<?php //require 'app/views/head.php'; ?>

<body>
 <script>
$(function(){
// $(".image").height($("#image").width()*9/16);
});
</script>
<div class="w3-white w3-margin-32  ">
<!--<img src="<?= URL.'public/img/header.jpg'?>" class="" style="width:100%;max-width:400px"/>-->
    <p>
    <h2 class="w3-left">گلبن image</h2>
    <a href="<?= URL ?>login" >وارد شوید</a>
    <a href="<?= URL ?>signup" class="w3-margin-16">ثبت نام کنید</a>
    </p>
    <button class="w3-large w3-btn w3-green" type="submit" name="submit"><i class="fa fa-shopping-bag"></i>   سبد خرید<span class="w3-margin-2 w3-round w3-tag w3-light-green"></span></button>

</div>
<div class="w3-light-grey">

    <ul class="w3-navbar" style="margin-right: 32px">
    <?php foreach($data['menu'] as $menu){ ?>
        <?php if($menu['parent']=='0'){ ?>
        <li class="w3-right"><a class="w3-hover-none w3-text-grey w3-hover-text-white" href="#<?=$menu['href']?> "><?= $menu['menu'] ?></a></li>
        <?php } ?>
    <?php } ?>
<!--        <li><a class="w3-hover-none w3-text-black" href="#">Home</a></li>-->

</ul>
</div>
<!--  -->
<div class="w3-white w3-padding-16" dir="rtl">
<div class="container w3-row">
  <div class="w3-col m6">
    <p>
      روغن ارده خیلی خشه
      <br>
      بخورید چاق شید
      <br>
      از چی بگم برات
      <br>
      انتظار داری چه چیزی از جیب من درآد
    </p>
    <div class="w3-center">
      <button class="w3-large w3-btn w3-green" type="submit" name="submit"><i class="fa fa-shopping-bag"></i> همین الان خرید کنید<span class="w3-margin-2 w3-round w3-tag w3-light-green"></span></button>
    </div>
  </div>
  <div class="w3-col m6">
    <img id="image" src="public/img/4.png" class="image">
  </div>
</div>
</div>
<!--  -->
<div  class="container ">
  <div class="w3-row">

    <div class="w3-col m4 s12 pad">
      <div class="w3-card-4 w3-round w3-center-small">
     <img class="image " src="public/1.jpg" alt="Norway">
     <div class="w3-container w3-center pad">
       <p>The Troll's tongue in Hardanger, Norway</p>
     </div>
     </div>
   </div>

   <div class="w3-col m4 s6 pad">
     <div class=" w3-card-4 w3-round">
    <img class="image" src="public/1.jpg" alt="Norway">
    <div class="w3-container w3-center pad">
      <p>The Troll's tongue in Hardanger, Norway</p>
    </div>
    </div>
  </div>

  <div class="w3-col m4 s6 pad">
    <div class=" w3-card-4 w3-round">
   <img class="image" src="public/1.jpg" alt="Norway">
   <div class="w3-container w3-center pad">
     <p>The Troll's tongue in Hardanger, Norway</p>
   </div>
   </div>
 </div>

   <!-- <div class="w3-row">

    <div class="w3-col l4 pad">
      <div class=" w3-card-4 w3-round">
     <img src="img_fjords.jpg" alt="Norway">
     <div class="w3-container w3-center">
       <p>The Troll's tongue in Hardanger, Norway</p>
     </div>
     </div>
   </div>

   <div class="w3-col l4 pad">
     <div class=" w3-card-4 w3-round">
    <img src="img_fjords.jpg" alt="Norway">
    <div class="w3-container w3-center">
      <p>The Troll's tongue in Hardanger, Norway</p>
    </div>
    </div>
  </div>

  <div class="w3-col l4 pad">
    <div class=" w3-card-4 w3-round">
   <img src="img_fjords.jpg" alt="Norway">
   <div class="w3-container w3-center">
     <p>The Troll's tongue in Hardanger, Norway</p>
   </div>
   </div>
 </div>-->

  </div>

</div>
<div class="w3-white w3-padding-16">
<div class="container">
  <img id="image" src="public/4.jpg" class="image">
</div>
</div>
<!--  -->
<div  class="container ">
  <div class="w3-row">
    <h3>
      درباره ی ما
    </h3>
    <div class="w3-col m3 s6 pad">
      <div class="w3-card-4 w3-round">
     <img class="image " src="public/enamad.jpg" alt="نماد">
     <div class="w3-container w3-center pad">
       <p>
         نماد الکترونیک
       </p>
     </div>
     </div>
   </div>
   <div class="w3-col m3 s6 pad">
     <div class="w3-card-4 w3-round">
    <img class="image " src="public/saman.jpg" alt="ساماندهی">
    <div class="w3-container w3-center pad">
      <p>
        ستاد ساماندهی
      </p>
    </div>
    </div>
  </div>
  <div class="w3-col m3 s6 pad">
    <div class="w3-card-4 w3-round">
   <img class="image " src="public/1.jpg" alt="Norway">
   <div class="w3-container w3-center pad">
     <p>The Troll's tongue in Hardanger, Norway</p>
   </div>
   </div>
 </div>
 <div class="w3-col m3 s6 pad">
   <div class="w3-card-4 w3-round">
  <img class="image " src="public/1.jpg" alt="Norway">
  <div class="w3-container w3-center pad">
    <p>The Troll's tongue in Hardanger, Norway</p>
  </div>
  </div>
</div>

 </div>
</div>
<!--  -->
</body>
</html>
