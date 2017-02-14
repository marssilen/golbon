<?php require_once('app/views/head.php'); ?>

<body>
<?php require_once('app/views/header.php'); ?>
<?php require_once('app/views/menu.php'); ?>

<div class="w3-row w3-card-2 w3-margin-32">
  <div id="msgbox" class="w3-red w3-round" style="display:none">
     <span onclick="this.parentElement.style.display='none'" class="w3-closebtn w3-xxxlarge" style="padding-right:10px">&times;</span>
     <div class=" w3-padding-16">
    <h3 id="msg" class="w3-center">
    </h3>
    </div>
  </div>
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
    <a href="#" id="fav_btn"><i class="w3-xlarge fa fa-heart-o"></i></a>
</p>
<img src="<?= URL.'public/upload/'.$data['card_image']?>"  />
<!--style="width:100%"-->
</div>
</div>
</div>


 <script>
$(function(){
  $('#buy_btn').on('click',buy);
  $('#fav_btn').on('click',fav);
  function msg(message,type){
    $('#msgbox').removeClass('w3-green w3-red w3-gray');
    switch (type) {
      case 1:
        $('#msgbox').addClass('w3-green');
        break;
      case 2:
        $('#msgbox').addClass('w3-red');
        break;
      default:
        $('#msgbox').addClass('w3-gray');
    }
    var msg_obj = jQuery.parseJSON(message);
    if( msg_obj.st === "please login" ){
      alert(msg_obj.st);
    };
    $('#msg').html(msg_obj.st);
    $('#msgbox').slideDown(500);
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

</body>
</html>
