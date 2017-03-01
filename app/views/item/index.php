<?php require_once('app/views/head.php'); ?>

<body>
<?php require_once('app/views/header.php'); ?>
<?php require_once('app/views/menu.php'); ?>
<br>
<div class="w3-card-2 w3-white container">
  <!-- w3-row w3-card-2  -->
<?php require_once('app/views/msgbox.php'); ?>
<div class="w3-col m8 s12">
    <p class="price1 w3-margin-32 w3-round-medium w3-light-grey w3-container">
        <?= $data['name'] ?>
    </p>
<div class="w3-card w3-margin-32 w3-container w3-padding-16" id="columnTwo">

<?= $data['long_description'] ?>
<form id="form" method="post" enctype="multipart/form-data">
    <p class="price1">
        قیمت  :<?= $data['price'] ?>
    </p>
    <input type="hidden" name="id" value="<?= $data['id'] ?>"/>
</form>
<button id="buy_btn" class="w3-btn w3-green" type="submit" name="submit" >افزودن به سبد خرید</button>
</div>
</div>
<div class="w3-col s12 m4 w3-center" >
<div style="" class=" w3-margin-32 w3-padding-16" id="columnOne">
<p style="text-align: left">
<a class="w3-margin-8" href="#"><i class="w3-xlarge fa fa-share-alt"></i></a>
<a href="javascript:void(0)" id="fav_btn"><i class="w3-xlarge fa fa-heart-o"></i></a>
</p>
<div class="w3-center w3-red"><img style="width:100%" src="<?= URL.'public/upload/'.$data['card_image']?>"  /></div>
<div class=" w3-padding-8" style="margin-top:20px">
    <img onclick="document.getElementById('modalimg').style.display='block'" src="<?= URL.'public/upload/a_22.png'?>" class="w3-hover-opacity" width="50" height="50" />
    <img onclick="document.getElementById('modalimg').style.display='block'" src="<?= URL.'public/upload/a_22.png'?>" class="w3-hover-opacity" width="50" height="50" />
    <img onclick="document.getElementById('modalimg').style.display='block'" src="<?= URL.'public/upload/a_22.png'?>" class="w3-hover-opacity" width="50" height="50" />
</div>

<!--style="width:100%"-->
</div>
</div>
</div>


 <script>
$(function(){
  $('#buy_btn').on('click',buy);
  $('#fav_btn').on('click',fav);
  $('#login_btn').on('click',login);

  function msg(message,type){
    var msg_obj = jQuery.parseJSON(message);
    if( msg_obj.st === "please login" ){
      // alert(msg_obj.st);
      $("#login_modal").show();
    }
    if( msg_obj.st === "please login" ){
      // alert(msg_obj.st);
      $("#login_modal").show();
    }
    // added to basket
    if( msg_obj.st === "added to basket" ){
      alert("به سبد خرید اضافه شد");
    }
    if( msg_obj.st === "added to favorites" ){
      alert("به لیست اضافه شد");
    }
    if( msg_obj.st === "logged" ){
      $.ajax({url: "<?= URL ?>ajax/header", success: function(result){
        $("#l_header").html(result);
        $("#login_modal").hide();
      }});
      // location.reload();
    }
    // $('#msg').html(msg_obj.st);
    // $('#msgbox').slideDown(500);
  }
  function login(){

    var data=$('#login_form').serialize();
    url='<?= URL ?>/login/run';
    ajax(url,data);

  }
  function buy(){
    var data=$('#form').serialize();
    url='sf';
    ajax(url,data);
  }
  function fav(){
    var data=$('#form').serialize();
    url='add_to_favorite';
    ajax(url,data);
  }
  function ajax(url,data){

    $.post(url,data,function(da){
      msg(da,1);
    }).done(function(){
      // msg("done",1)
    }).fail(function(){
      msg("fail",2);
    });
  }
   $("#columnTwo").height($("#columnOne").height());
   var a=$("#columnOne").height();
		//alert(a);
});
</script>




<div id="modalimg" class="w3-modal w3-animate-zoom w3-center" onclick="this.style.display='none'">
  <img class="w3-modal-content" src="<?= URL.'public/upload/a_22.png'?>">
</div>


<div class="w3-blue-grey" style="margin-top:20px">
  فوتر
</div>
</body>
</html>
