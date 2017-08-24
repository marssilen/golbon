<div style="background: #F8F8F8 url('<?=URL?>public/back.png') right bottom repeat-x;">
<!--<div style="background-image: url('public/back.png')">-->
<div style="padding:32px;" id="l_header">
<?php require_once('app/views/header_content.php'); ?>
</div>
</div>
<!--######################################################-->
<div id="login_modal" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('login_modal').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
      </div>
<br>
<div class="w3-container">
      <form id="login_form" method="post" enctype="multipart/form-data">
        <div class="w3-section">
          <label><b>شماره موبایل خود را وارد نمایید.</b></label>
          <input dir="ltr" class="w3-input w3-border w3-margin-bottom" required type="tel" name="username" value="09"
          minlength="11" maxlength="11" oninput="textch()" id="tex" placeholder="09*********">
        </div>
        <div class="w3-section" id="signin" style="display:none">
          <label><b>رمز عبور</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="password" name="password" >
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> مرا به یاد بسپار</input>
        </div>
        <div class="w3-section" id="signup" style="display:none">
          <label><b>رمز عبور</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="password" name="cpassword" >
          <label><b>تکرار رمز عبور</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="password" name="cpassword1" >
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> مرا به یاد بسپار</input>
        </div>
      </form>




<button class="w3-btn-block w3-green w3-section" id="login_btn">وارد شوید</button>
</div>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('login_modal').style.display='none'" type="button" class="w3-btn w3-red w3-left">انصراف</button>
<!--        <span class="blcok"><a href="--><?//= URL ?><!--signup">ثبت نام</a></span>-->
<!--        <span class="block"><a href="">رمز را فراموش کرده اید؟</a></span>-->
      </div>

    </div>
</div>
