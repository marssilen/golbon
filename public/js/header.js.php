<?php
define('URL','http://localhost/golbon/');
?>
<!-- <script> -->
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
    }
    if( msg_obj.st === "logged" ){
      $.ajax({url: "<?= URL ?>ajax/header", success: function(result){
        $("#l_header").html(result);
        $("#login_modal").hide();
      }});
    }
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
});
