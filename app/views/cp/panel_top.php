<!DOCTYPE html>
<html lang="en">
<head>
    <title>hello</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= URL ?>public/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= URL ?>public/w3.css">
<link rel="stylesheet" href="<?= URL ?>public/mycss.css">
<!-- jQuery library -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="<?= URL ?>public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="<?= URL ?>public/myscript.js"></script>
<!-- AngularJS -->
<script src="<?= URL ?>public/js/angular.min.js"></script>
<style>
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
    
 <script> 
$(function(){
$('.mother').click(function(e) {
    $(this).siblings('ul').toggle();
	$(this).children('span').toggleClass('glyphicon-chevron-right glyphicon-chevron-down');	
});

		
});

</script>
<div  class="container-fluid bg-dark top-align">
  
  <div class="row">
  <div class="col-xs-6" align="left">
  <h4>Dashboard</h4> <h6>Hello <?=Session::get('username')?></h6>
  </div>
  <div class="col-xs-6" align="right">
 
  <a href="<?= URL ?>cp/logout" class="btn btn-warning">Logout</a>
  </div>
  </div>
</div>
<div class="container-fluid text-primary" align="">
<div class="row">
  <div class="col-xs-12 col-sm-2" align="center">
  <h6><span class="glyphicon glyphicon-wrench"> Tools</span></h6>
  <hr>
  
  
  <div id="navigation" align="left">
        <ul>
        <?php if(Session::get('role')=='admin'){?>
            <li>
                <a class="mother" href="#">Desktop <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionOneLinks">
                  <li><a href="<?= URL ?>cp/index"><span class="glyphicon glyphicon-th"></span> Items</a></li>
                  <li><a href="<?= URL ?>cp/show_cat"><span class="glyphicon glyphicon-list"></span> Categories</a></li>
                  <li><a href="<?= URL ?>cp/s"><span class="glyphicon glyphicon-picture"></span> Files</a></li>
                  <li><a href="<?= URL ?>cp/purchased"><span class="glyphicon glyphicon-shopping-cart"></span> Orders</a></li>
                </ul>
            </li>
            <li>
                <a class="mother" href="#">Users <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionTwoLinks">
                  <li><a href="<?= URL ?>cp/get_users"><span class="glyphicon glyphicon-user"></span> Users list</a></li>
                  <li><a href="<?= URL ?>cp/comments">comments</a></li>
                  <li><a href="<?= URL ?>cp/#">send message to user</a></li>
                  <li><a href="<?= URL ?>cp/#">A link to a page</a></li>
                </ul>
            </li>
            <?php } ?>
            <li>
                <a class="mother" href="#">Reports <span class="glyphicon glyphicon-chevron-down"></span></a>
                <ul id="sectionThreeLinks" ><!--style="display: none;"-->
                  <li><a href="my_orders">سفارشات من</a></li>
                  <li><a href="<?= URL ?>cp/my_favorites">لیست مورد علاقه</a></li>
                  <li><a href="<?= URL ?>cp/my_comments">نظرات من</a></li>
                  <li><a href="<?= URL ?>cp/#">پیام پشتیبانی</a></li>
                  <li><a href="<?= URL ?>cp/profile">پروفایل من</a></li>
                  <li><a href="<?= URL ?>cp/add_address">آدرس های من</a></li>
                </ul>
            </li>
        </ul>
    </div>
  
  
  

  </div>
  <div class="col-xs-12 col-sm-10">
 