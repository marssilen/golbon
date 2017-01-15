<?php
$images=explode(',',$data['image']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FalavarShop</title>
  <script src="<?= URL ?>js/j.js"></script>
  <script src="<?= URL ?>js/ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" href="<?= URL ?>css/w3.css">
  <link rel="stylesheet" href="<?= URL ?>css/mycss.css">
  
  <link rel="stylesheet" href="<?= URL ?>bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="<?= URL ?>bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />

  <script> 
$(function(){
   
		
		
		
});
</script>
  
  
</head>
<body>

<div class="w3-blue-grey" style="height:50px">

</div>
<div id="top-tool" class="w3-white w3-card-2  ">

  <div  class="container center "><!--w3-border w3-border-black-->
    <div class="w3-row">
      <div class="w3-col s12 m6 sc_ts "><img src="../img/digikala-logo-slogan.png"></div>
      <a href="<?php echo '../cp/ '; ?>"><button class="w3-padding-2 w3-btn w3-green w3-round w3-border w3-right w3-margin-4">پنل</button></a>
      <a href="<?php echo 'delete_item/'.$data['id']; ?>"><button class="w3-padding-2 w3-btn w3-red w3-round w3-border w3-right w3-margin-4">حذف</button></a>
      <div class="w3-col s12 m6 ">
         
      </div>
    </div>
  </div>
</div>

<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-col s8" style="padding:15px">
<div class="w3-card-2"><!--left images-->
<div>
<button style="margin:5px" onclick="document.getElementById('add_image_modal').style.display='block'" class="w3-btn w3-white w3-round w3-border">+</button>
</div>

<?php 
foreach($images as $image){
	if(!empty($image))
	{
?>
<div class=" w3-col m3 s6 " style="padding:2px" >


<div class="w3-white w3-border" >
<div >
<a href="<?php echo 'delete_pic/'.$data['id'].'/'.$image; ?>"><button class="w3-padding-2 w3-btn w3-red w3-round w3-border w3-right w3-margin-4">X</button></a>
</div>
<a href="<?php echo '../upload/'.$image; ?>">
<img src="<?php echo '../upload/'.$image; ?>" style="width:100%">
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
<div class="w3-card-2"><!--left-->


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
<div class="w3-card-2"><!--left-->


<form method="post" id="f-form" enctype="multipart/form-data">
<textarea name="short_description" id="short_description" ><?php echo $data['short_description'] ?></textarea><br>

<div style="margin:5px">
<button type="submit" name="insert_s" class="show w3-btn w3-green w3-round w3-right" >ثبت</button>
</div>
<br><br>

</form>





</div>




<div class="tcontainer">
  <h2>ویژگی ها</h2>

  <button id="add_table">add table</button>
  <button class="show">show</button>
  <div id="features">
<?php echo $data['short_description'] ?>

<script>
$('#features').find('p').each(function() {
var con=$( this ).html();
$( this ).html('<input value="'+con+'" class="text" style="width:100%">');
});
$('#features').find('div').each(function() {

$( this ).append('<button class="add">add row</button>');
});
</script>


  </div>           
</div>

<div id="yco" class="w3-padding-16 w3-hide">
<div class="w3-card-2">
<h4><p><input type="text" class="text w3-margin-16" placeholder="table name"></p></h4>
<button class="add w3-btn w3-ripple w3-yellow w3-margin-4">+</button>
  <table class="w3-table w3-border w3-striped">
      <tr>
        <td><p><input type="text" dir="rtl" align="right" class="text" style="width:100%"></p></td>
        <td><p><input type="text" dir="rtl" align="right" class="text" style="width:100%"></p></td>
      </tr>
  </table>
</div>
</div>
<script>
$(document).on('click','.add',function(){
   $(this).siblings('table').append('<tr><td><p><input type="text" dir="rtl" align="right" class="text" style="width:100%"></p></td><td><p><input type="text" dir="rtl" align="right" class="text" style="width:100%"></p></td></tr>');
});
$(document).on('click','.show',function(){
$('#features').find('button').remove();
$('#features').find('script').remove();
$('#features').find('input').each(function() {
  $( this ).after( $(this).val());
  $(this).remove();
});
var html=$('#features').html();
$('#short_description').val(html);
});



$('#add_table').click(function(e) {
	var tc=$('#yco').html();
    $('#features').append(tc);
});
</script>



</div><!--end left container-->

<div class="w3-col s4" style="padding:15px">
<div class="w3-card-2">

<img src="<?php if(!empty($data['card_image']))echo '../upload/'.$data['card_image'];else  echo '../img/default.jpg'?>" style="width:100%">
<div class="">
<center>
<button onclick="document.getElementById('add_card_image_modal').style.display='block'" class="w3-btn w3-green" style="display:block;width:100%">تغییر</button>
</center>
</div>

</div>
<br>

<div class="w3-card-2" style="padding:16px">

<form method="post" enctype="multipart/form-data" action="change_name/<?php echo $data['id'] ?>">
<label class="w3-label w3-text-blue"><b>Name</b></label>
<input class="w3-input w3-border w3-round" type="text" name="name"  value="<?php echo $data['name'] ?>">
<br>
<button type="submit" name="change_name" class="w3-btn w3-green w3-round w3-right" >تغییر</button>
<br>
</form>

</div>
<br>
<div class="w3-card-2" style="padding:16px">
<p>Category</p>

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




<br>
<br>
<button type="submit" name="change_category" class="w3-btn w3-green w3-round w3-right" >تغییر</button>
<br>
</form>

</div>

<br>
<div class="w3-card-2"  style="padding:16px">


<form method="post" enctype="multipart/form-data" action="change_price/<?php echo $data['id'] ?>">

<label class="w3-label w3-text-blue"><b>old_price</b></label>
<input class="w3-input w3-border w3-round" type="text" name="old_price"  value="<?php echo $data['old_price'] ?>">

<label class="w3-label w3-text-blue"><b>price</b></label>
<input class="w3-input w3-border w3-round" type="text" name="price"  value="<?php echo $data['price'] ?>">


<br>
<button type="submit" name="change_price" class="w3-btn w3-green w3-round w3-right" >تغییر قیمت</button>
<br>
</form>

</div>

<div class="w3-card-2"  style="padding:16px"><!--tag-->
Tag
<form method="post" enctype="multipart/form-data" action="change_tag/<?php echo $data['id'] ?>">
<input type="text" name="tag" class="input" value="<?php 
$signs=["{","}"];
$formated_string=str_replace($signs,"",$data['tag']);
echo  $formated_string;

?>"/>
<button type="submit" name="change_tag" class="btn btn-primary" >change</button>
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
