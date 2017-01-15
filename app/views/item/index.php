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
<!-- jQuery library -->
<script src="<?= URL ?>vbootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/myscript.js"></script>
<title><?= $data['name'] ?></title>

</head>

<body>
<div class="w3-white">
<img src="<?= URL.'public/img/header.jpg'?>" class="" style="width:100%;max-width:400px"/>
</div>
<div class="w3-row" style="display: flex">
<div class="w3-col s4" >
<div class="w3-card-2 w3-margin-32 w3-padding-16" id="columnOne">

<img src="<?= URL.'public/upload/'.$data['card_image']?>" class="" style="width:100%"/>

</div>
</div>
<div class="w3-col s8 "  >
<div class="w3-card-2 w3-margin-32 w3-container w3-padding-16" id="columnTwo">
<?= $data['long_description'] ?>

<form method="post" enctype="multipart/form-data">
    <input type="range" min="1" max="15" name="num" value="1">
<button class="btn btn-default" type="submit" name="submit">Buy</button>
</form>


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