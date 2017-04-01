
<br>


<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
  <?php if(isset($data[0])){?>

<div class="w3-responsive">



<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
  <th>محصول</th>
  <th>تعداد</th>
  <th>قیمت واحد </th>
  <th>قیمت کل</th>
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
  <td><a href="<?= URL.'item/'.$item['item_id'] ?>"><?= $item['name'] ?></a></td>
  <td><?=$item['num'] ;?></td>
  <td><?= $item['price'] ?></td>
  <td><?= $item['price']*$item['num'] ?></td>
  <!--<td><?= /*$item['barging']*/NULL ?></td>-->
  <!--<td><?= /*$last_price*/NULL ?></td>-->
</tr>
<?php

}
?>

</table>
    <P class="w3-right w3-margin-16">مبلغ فاکتور:<?= $factor_price ?></P>
    <pre>
    <?php
    print_r($data);
    ?>
  </pre>
</div>
<address class="">
  address:<?= $data[0]['faddress']?><br>
  postal_code:<?= $data[0]['postal_code']?><br>
  name:<?= $data[0]['aname']?><br>
  phone:<?= $data[0]['s_phone']?><br>
  cphone:<?= $data[0]['c_phone']?><br>
  date:<?= $data[0]['date']?><br>
  factor_price:<?= $data[0]['factor_price']?><br>
</address>
<form action="" method="post">
  <select name="status">
  <?php
  foreach ($GLOBALS['sta_array'] as $key => $value) {
   ?>
  <option value="<?=$key?>" <?php if($data[0]['status']==$key)echo 'selected'?> ><?=$value?></option>
  <?php } ?>
  </select>
  <input type="submit" value="تغییر وضعیت" name="submit"/>
</form>
<?php
}else {
  echo "موردی یافت نشد";
}
?>
</div>
</div>
</div>
