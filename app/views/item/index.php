<?php
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= URL ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= URL ?>public/w3.css">
<link rel="stylesheet" href="<?= URL ?>public/mycss.css">
<link rel="stylesheet" href="<?= URL ?>public/font/font.css">

<!-- jQuery library -->
<script src="<?= URL ?>vbootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/myscript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title><?= $data['name'] ?></title>
<style>
    body{
        font-family: 'Yekan' ;
	/*font-size: 15px;*/
        text-align: right;
        direction: rtl;
    }
    .price1{
       font-size: 25px; 
    }
</style>
</head>

<body>
    <div class="w3-card-2  w3-border">
<div class="w3-white w3-margin-32  ">
<!--<img src="<?= URL.'public/img/header.jpg'?>" class="" style="width:100%;max-width:400px"/>-->
    <p>
        <a href="<?= URL ?>login" >وارد شوید</a>
    <a href="<?= URL ?>signup" class="w3-margin-16">ثبت نام کنید</a>
    </p>
     
    <button class="w3-large w3-btn w3-green" type="submit" name="submit"><i class="fa fa-shopping-bag"></i>   سبد خرید<span class="w3-margin-2 w3-round w3-tag w3-light-green">9</span></button>
</div>
    </div>
<div class="w3-row w3-card-2 w3-margin-32">
<div class="w3-col s8">
    <p class="price1 w3-margin-32 w3-round-medium w3-light-grey w3-container">
        <?= $data['name'] ?>
    </p>
<div class="w3-card w3-margin-32 w3-container w3-padding-16" id="columnTwo">
    
<?= $data['long_description'] ?>
    <p class="price1">
        قیمت هر واحد:<?= $data['price'] ?>
    </p>
    <input type="number" min="1" max="100" name="num" value="1">
<button class="w3-btn w3-green" type="submit" name="submit">افزودن به سبد خرید</button>
</form>


</div>
</div>
<div class="w3-col s4" >
<div class=" w3-margin-32 w3-padding-16" id="columnOne">
    <p style="text-align: left">
    <a class="w3-margin-8" href="#"><i class="w3-xlarge fa fa-share-alt"></i></a>
    <a href="#"><i class="w3-xlarge fa fa-heart-o"></i></a>
</p>
<img src="<?= URL.'public/upload/'.$data['card_image']?>" class="" />
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