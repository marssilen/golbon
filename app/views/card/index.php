<?php
$first=(isset($data['cards'][0]->id))?$data['cards'][0]->id:0 ;
$last=(isset($data['cards'][count($data['cards'])-1]->id))?$data['cards'][count($data['cards'])-1]->id:0 ;
if($first>$last){
	$temp=$first;
	$first=$last;
	$last=$temp;
}
//echo $first.'<br>'.$last;
?>
<div last='<?php echo $last ?>' first='<?php echo $first ?>' class="w3-row">
<?php


/*echo '<pre>';
print_r($data['cards']);
echo '</pre>';*/


foreach($data['cards'] as $card){
?>
<div id='<?php echo (isset($card->id))? $card->id : '' ?>' class="col-sm-3 col-xs-6">
<a href="<?php echo (isset($card->link))? $card->link : '#' ?>" style="text-decoration:none">
<div class="w3-round  w3-card-2 w3-center mycard w3-white" style="padding:8px" >
<div class="w3-white" style="padding-bottom:0px;padding-left:10px;padding-right:10px">
<img src="<?php echo (isset($card->image))? 'upload/'.$card->image : '' ?>" style="width:100%">
<p align="right" class="font" style="padding:0px">
<?php echo (isset($card->name))? $card->name : '' ?>
</p>
<div class="w3-text-red  fontbold" dir="rtl" align="right" style="font-size:12px;text-decoration:line-through;background:#fff">
<?php echo (isset($card->old_price))? $card->old_price : '' ?>
</div>



</div>
<div class="" style="height:30px;padding-right:5px;">
<img  class="float_left w3-round" src="img/shop.png">
<span class="fontbold float_right " dir="rtl" style="font-size:16px">
<?php echo (isset($card->price))? $card->price : 'xx' ?>
</span>
</div>
</div>
</a>
</div>
<?php 
}
?>
</div>
<script>
$(function (){
	
	$(".mycard").mouseenter(function(){
         $(this).addClass("w3-card-4");
    }); 
	$(".mycard").mouseleave(function(){
         $(this).removeClass("w3-card-4");
    });
});
</script>