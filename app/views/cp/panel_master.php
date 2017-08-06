<!DOCTYPE html>
<html lang="en">
<head>
    <title>ناحیه کاربری</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= display(URL) ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/w3.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/mycss.css">
<link rel="stylesheet" href="<?= display(URL) ?>public/font/font.css">
<!-- jQuery library -->
<script src="<?= display(URL) ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= display(URL) ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= display(URL) ?>public/myscript.js"></script>
<!-- AngularJS -->
<script src="<?= display(URL) ?>public/js/angular.min.js"></script>
<style>
body{
    font-family: 'Yekan' ;
/*font-size: 15px;*/
    text-align: right;
    direction: rtl;
}
a:link, a:visited{
	text-decoration:none;
}
ul li{
	list-style-type: none;
}
li ul li{
	margin-left:-1em;
}

.bg-dark {
    background-color: #494949;
	color:#BFB8B8;
}
.top-align{
	padding:10px 50px 10px 50px;
}


</style>
</head>
<body>
  <?php require_once('app/views/header.php'); ?>
  <?php require_once('app/views/menu.php'); ?>
 <script>
$(function(){
$('.mother').click(function(e) {
    $(this).siblings('ul').toggle();
	$(this).children('span').toggleClass('glyphicon-chevron-right glyphicon-chevron-down');
});


});

</script>
<div class="container-fluid text-primary" align="">
<div class="row">
  <div class="col-xs-12 col-sm-2" align="center">
  <!-- <h6><span class="glyphicon glyphicon-wrench"> </span></h6> -->
  <hr>
  <div id="navigation" align="left" dir="ltr">
        <ul>
        <?php if(Session::get('role')=='admin'){?>
            <li>
                <a class="mother" href="<?= LINK ?>">Desktop <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionOneLinks">
                  <li><a href="<?= display(URL) ?>cp/items/"><span class="glyphicon glyphicon-th"></span> Items</a></li>
                  <li><a href="<?= display(URL) ?>cp/show_cat"><span class="glyphicon glyphicon-list"></span> Categories</a></li>
                  <li><a href="<?= display(URL) ?>cp/s"><span class="glyphicon glyphicon-picture"></span> Files</a></li>
                  <li><a href="<?= display(URL) ?>cp/purchased"><span class="glyphicon glyphicon-shopping-cart"></span> Orders</a></li>
                  <li><a href="<?= display(URL) ?>cp/menu">Menu</a></li>
                </ul>
            </li>
            <li>
                <a class="mother" href="#">Users <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionTwoLinks">
                  <li><a href="<?= display(URL) ?>cp/get_users/"><span class="glyphicon glyphicon-user"></span> Users list</a></li>
                  <li><a href="<?= display(URL) ?>cp/comments">comments</a></li>
                  <li><a href="<?= display(URL) ?>cp/#">send message to user</a></li>
                </ul>
            </li>
            <?php } ?>
            <li>
                <a class="mother" href="<?= LINK ?>">گزارش <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionThreeLinks" ><!--style="display: none;"-->
                  <li><a href="<?= display(URL) ?>cp/my_orders">سفارشات من</a></li>
                  <li><a href="<?= display(URL) ?>cp/my_favorites">لیست مورد علاقه</a></li>
                  <li><a href="<?= display(URL) ?>cp/my_comments">نظرات من</a></li>
                  <li><a href="<?= display(URL) ?>cp/#">پیام پشتیبانی</a></li>
                  <li><a href="<?= display(URL) ?>cp/profile">پروفایل من</a></li>
                  <li><a href="<?= display(URL) ?>cp/address">آدرس های من</a></li>
                </ul>
            </li>
        </ul>
    </div>




  </div>
  <div class="col-xs-12 col-sm-10">
      <?php
      require_once 'app/views/'.$this->page.'.php';
      ?>
  </div>

</div>
</div>



</body>
</html>