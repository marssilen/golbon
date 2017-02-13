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

<?php require_once('app/views/font.php'); ?>
<!-- jQuery library -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/myscript.js"></script>
<title><?= $data['name'] ?></title>
<style>
</style>
</head>

<body>
<?php require_once('app/views/header.php'); ?>
<?php require_once('app/views/menu.php'); ?>

<div class="w3-row w3-card-2 w3-margin-32">
<div class="w3-col m8 s12">
    <p class="price1 w3-margin-32 w3-round-medium w3-light-grey w3-container">
        <?= $data['name'] ?>
    </p>
<div class="w3-card w3-margin-32 w3-container w3-padding-16" id="columnTwo">

<?= $data['long_description'] ?>
<form method="post" enctype="multipart/form-data">
    <p class="price1">
        قیمت  :<?= $data['price'] ?>
    </p>
<button class="w3-btn w3-green" type="submit" name="submit">افزودن به سبد خرید</button>
</form>


</div>
</div>
<div class="w3-col s12 m4 w3-center" >
    <div style="" class=" w3-margin-32 w3-padding-16" id="columnOne">
    <p style="text-align: left">
    <a class="w3-margin-8" href="#"><i class="w3-xlarge fa fa-share-alt"></i></a>
    <a href="add_to_favorite/<?=$data['id']?>"><i class="w3-xlarge fa fa-heart-o"></i></a>
</p>
<img src="<?= URL.'public/upload/'.$data['card_image']?>"  />
<!--style="width:100%"-->
</div>
</div>
</div>

<?php //print_r($data);?>


 <script>
$(function(){
   $("#columnTwo").height($("#columnOne").height());
   var a=$("#columnOne").height();
		//alert(a);
});
</script>

</body>
</html>
