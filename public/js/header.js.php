<?php
define('URL','http://localhost/golbon/');
?>
<!-- <script> -->
function textch() {
    var x = document.getElementById("tex").value;
    var regexp=/\D/g;
    document.getElementById("tex").value=x.replace(regexp,"");
}
$(function(){
  $('#buy_btn').on('click',buy);
  $('#fav_btn').on('click',fav);
  $('#login_btn').on('click',login);

  function msg(message,type){
    var msg_obj = jQuery.parseJSON(message);
    if( msg_obj.st === "please login" ){
      $("#login_modal").show();
    }
    if( msg_obj.st === "please login" ){
      $("#login_modal").show();
    }
    if( msg_obj.st === "added to basket" ){
      alert("به سبد خرید اضافه شد");
      $('#tedad').html(msg_obj.tedad);
    }
    if( msg_obj.st === "added to favorites" ){
      alert("به لیست علاقه مندی ها اضافه شد");
        $("#fav_button").toggleClass('fa-heart','fa-heart-o');
    }
	if( msg_obj.st === "nouser" ){
      //alert("fa");
	  document.getElementById("signin").style.display="none";
	  document.getElementById("signup").style.display="block";
	  //alert("done");
    }
	if( msg_obj.st === "pass" ){
      //alert("fa");
	  document.getElementById("signup").style.display="none";
	  document.getElementById("signin").style.display="block";
	  //alert("done");
    }
	if( msg_obj.st === "wrongpassword" ){
		alert("wrong password");
	}
	if( msg_obj.st === "passnotmatch" ){
		alert("passwords are not the same");
	}
    if( msg_obj.st === "logged" ){
      $.ajax({url: "<?= URL ?>ajax/header", success: function(result){
        $("#l_header").html(result);
        $("#login_modal").hide();
      }});
    }
  }
  function login(){
      if(document.getElementById("tex").value.length==11) {
          var data = $('#login_form').serialize();
          url = '<?= URL ?>/login/run';
          ajax(url, data);
      }else {
          alert("لطفا شماره تلفن خود را وارد نمایید");
      }
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
		alert(da);
      msg(da,1);
    }).done(function(){
      // msg("done",1)
    }).fail(function(){
      msg("fail",2);
    });
  }
   $("#columnTwo").height($("#columnOne").height());
   var a=$("#columnOne").height();
});
