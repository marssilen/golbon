<?php
//$images=explode(',',$data['image']);
$images=  $data['image'];
?>
<?php require_once('app/views/head.php'); ?>

<body>
  <?php require_once('app/views/header.php'); ?>
  <?php require_once('app/views/menu.php'); ?>
<script src="<?= URL ?>public/js/ckeditor/ckeditor.js"></script>
<div class="w3-card w3-right " style="padding: 5px">
<a href="<?= 'delete_item/'.$data['id']; ?>"><button class="w3-padding-2 w3-btn w3-red w3-round w3-border">حذف</button></a>
<a href="<?=URL.'item/'.$data['id']; ?>"><button class="w3-padding-2 w3-btn w3-blue w3-round w3-border">نمایش</button></a>
</div>
<br>

<div class="w3-white container center" >
  <?php require_once('app/views/msgbox.php'); ?>
<div class="w3-row">
<div class="w3-col s8" style="padding:15px">
<div class="w3-card-2 w3-round" style="padding: 15px"><!--left images-->
<div>
<button style="margin:5px" onclick="document.getElementById('add_image_modal').style.display='block'" class="w3-btn w3-white w3-round w3-border">+</button>
</div>

<?php
foreach($images as $image){
	if(!empty($image))
	{
?>
<div class=" w3-col m3 s6" style="padding:5px" >
<div>
<div >
<a href="<?php echo 'delete_pic/'.$image['item_id'].'/'.$image['id']; ?>">
    <button class="w3-small">X</button></a>
</div>
<a href="<?php echo URL.'public/upload/'.$image['image']; ?>">
<img src="<?php echo URL.'public/upload/'.$image['image']; ?>" style="width:100%">
</a>
</div>
</div>
<?php
	}
}
 ?>
<div style="clear:both"></div>


</div>
<br>
<div class="w3-card-2  w3-round"><!--left-->


<form method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->max_file_size; ?>">
<textarea name="long_description" id="editor1"><?php echo $data['long_description'] ?></textarea><br>
 <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
</script>
<div style="margin:5px">
<button type="submit" name="insert" class="w3-btn w3-green w3-round w3-right" >ثبت</button>
</div>
<br><br>

</form>





</div>
<br>

</div><!--end left container-->

<div class="w3-col s4" style="padding:15px">
<div class="w3-card-2  w3-round">

<img alt="Insert an image" src="<?php if(!empty($data['card_image']))echo URL.'public/upload/'.$data['card_image'];else  echo '../img/default.jpg'?>" style="width:100%">
<div class="">
<center>
<button onclick="document.getElementById('add_card_image_modal').style.display='block'" class="w3-btn w3-green round_b" style="display:block;width:100%">تغییر</button>
</center>
</div>

</div>
<br>

<div class="w3-card-2  w3-round" >
<form method="post" enctype="multipart/form-data" action="change_name/<?php echo $data['id'] ?>">
<div class="w3-padding">
<label class="w3-label w3-text-blue"><b>نام</b></label>
<input class="w3-input w3-border w3-round" type="text" name="name"  value="<?php echo $data['name'] ?>">
</div>
<button type="submit" name="change_name" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
</form>

</div>
<br>
<div class="w3-card-2  w3-round">
  <div class="w3-container w3-padding">
<label class="w3-label w3-text-blue"><b>دسته بندی</b></label>
<form method="post" enctype="multipart/form-data" action="change_category/<?php echo $data['id'] ?>">
<select name="cat" class="w3-select w3-border">
<?php
foreach($this->cats as $option){
	$selected=($data['cat']==$option['id'])?'selected':'';
	echo '<option value='.$option['id'].' '.$selected.'>'.$option['cat'].'</option>';
	$option['cat'];
}
?>
</select>
</div>
<button type="submit" name="change_category" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
</form>

</div>

<br>
<div class="w3-card-2 w3-round">
<form method="post" enctype="multipart/form-data" action="change_price/<?php echo $data['id'] ?>">
<div class="w3-container w3-padding-16">
<label class="w3-label w3-text-blue"><b>قیمت اصلی</b></label>
<input class="w3-input w3-border w3-round" type="text" name="old_price"  value="<?php echo $data['old_price'] ?>">

<label class="w3-label w3-text-blue"><b>قیمت با تخفیف</b></label>
<input class="w3-input w3-border w3-round" type="text" name="price"  value="<?php echo $data['price'] ?>">
</div>
<button type="submit" name="change_price" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر قیمت</button>

</form>

</div>

<div class="w3-card-2 w3-round" style="margin-top:10px"><!--tag-->
<div class="w3-container">
<label class="w3-label w3-text-blue"><b>
تگ
</b></label>
</div>
<form method="post" enctype="multipart/form-data" action="change_tag/<?php echo $data['id'] ?>">
<div class="w3-container">
<input class="w3-input w3-border w3-round" type="text" name="tag" class="input" value="<?php
$signs=["{","}"];
$formated_string=str_replace($signs,"",$data['tag']);
echo  $formated_string;
?>"/>
</div>
<button type="submit" name="change_tag" style="margin-top:15px;" class="w3-btn w3-green w3-input round_b" >تغییر</button>
</form>
</div><!--end tag-->

</div><!--end right container-->

</div>



<br>



</div>


<div id="add_image_modal" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-white">
      <span onclick="document.getElementById('add_image_modal').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>Add image</h2>
    </header>
    <div class="w3-container">
        <form method="post" enctype="multipart/form-data" action="add_image/<?php echo $data['id'] ?>">
          <?php
          echo $data['id'];
          ?>
        <input name="image" type="file" id="image_upload" >
        <br>
        <button type="submit" name="add_image" class="w3-btn w3-red" style="display:block;width:100%">add</button>
        </form>
    </div>

  </div>
</div>

<div id="add_card_image_modal" class="w3-modal">
  <div class="w3-modal-content">
    <header class="w3-container w3-white">
      <span onclick="document.getElementById('add_card_image_modal').style.display='none'"
      class="w3-closebtn">&times;</span>
      <h2>Add image</h2>
    </header>
    <div class="w3-container">
    <form method="post" enctype="multipart/form-data" action="add_card_image/<?php echo $data['id'] ?>">
    <input name="image" type="file" id="image_upload" >
    <button type="submit" name="add_card_image" class="w3-btn w3-red"  style="display:block;width:100%" >add</button>
    </form>

    </div>

  </div>
</div>

</body>
</html>
