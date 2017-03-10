
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
<div class="w3-responsive">


<form method="post" action="">
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>محصول</th>
  <th>تعداد</th>
  <th>قیمت واحد </th>
  <th>قیمت کل</th>
  <th>ds</th>
  <!--<th>تخفیف کل</th>-->
  <!--<th>مبلغ کل</th>-->
</tr>
</thead>

<?php
$factor_price=0;
foreach($data as $item){
    $last_price=$item['price']*$item['num'];//-$item['barging'];
    $factor_price+=$last_price;
	?>
<tr>
  <td><?= $item['item_id'] ?></td>
  <td>
      <select onchange="this.form.submit()" name="sel[<?= $item['id'] ?>]">
      <?php for($i=1;$i<25;$i++){$item['num'] ;?>
      <option <?php if($i==$item['num'])echo 'selected'; ?> ><?= $i ?></option>
      <?php }?>
      </select>
      </td>

  <td><?= $item['price'] ?></td>
  <td><?= $item['price']*$item['num'] ?></td>
  <td>حذف</td>
  <!--<td><?= /*$item['barging']*/NULL ?></td>-->
  <!--<td><?= /*$last_price*/NULL ?></td>-->
</tr>
<?php

}
?>

</table>
<div>
  <p class="w3-right w3-margin-16">مبلق قابل پرداخت: <?= $factor_price ?></p>
  <input type="submit" name="pay" class="w3-btn w3-green w3-round w3-input" value="پرداخت"/>

</div>

<!-- </form> -->
</div>

<div  class="w3-container">
<!-- <form action=""> -->
<p>
ارسال به:
<br>
<?php
$a=$this->model('address')->get(Session::get('id'));
$i=true;
foreach ($a as $var) {
  echo '<input type="radio" name="address" value="'.$var['id'].'" '.(($i)?'checked':'').'> '.$var['name'].'  '.$var['c_phone'].'  '.$var['address'].'</input><br>';
  $i=false;
}
if(count($a)==0){
  echo '<b>آدرسی یافت نشد.</b>';
}
?>
<br>
<a href="<?= URL.'cp/add_address'?>" class="w3-btn w3-blue w3-round">
اضافه کردن آدرس
</a>
</p>
</form>
</div>

</div>
</div>
</div>
