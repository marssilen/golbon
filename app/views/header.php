<div class="w3-blue-grey">
<div style="padding:32px" id="l_header">
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
      <form class="w3-container" id="login_form" method="post" enctype="multipart/form-data">
        <!-- action="" method="post"  -->
        <div class="w3-section">
          <label><b>نام کاربری</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="نام کاربری را وارد کنید" name="username" >
          <label><b>رمز عبور</b></label>
          <input class="w3-input w3-border" type="password" placeholder="رمز عبور را وارد کنید" name="password" >
          <!-- <button class="w3-btn-block w3-green w3-section w3-padding" id="login_btn">وارد شوید</button> -->

          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> مرا به یاد بسپار
        </div>
      </form>
<button class="w3-btn-block w3-green w3-section w3-padding" id="login_btn">وارد شوید</button>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-btn w3-red w3-left">انصراف</button>
        <span class="w3-right w3-padding w3-hide-small"><a href="">رمز را فراموش کرده اید؟</a></span>
      </div>

    </div>
</div>
