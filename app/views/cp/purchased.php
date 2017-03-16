<form action="" method="post" class="w3-padding-16 w3-center center" style="" dir="ltr"><input type="text" id="search" name="search" placeholder="Search by code"></form>

<div class="w3-white container center" >
<div class="w3-row">
<div class="w3-card-2"><!--left images-->
<div class="w3-responsive">
<form method="post" action="">
<table class="w3-table w3-striped w3-bordered w3-border w3-hoverable">
<thead>
<tr class="w3-light-grey">
    <th>factor</th>
    <th>user</th>
    <th>status</th>
    <th>code</th>
    <th>view</th>
  </tr>
</thead>
<?php
foreach($data as $item){
	?>
<tr>
  <td><?= $item['id'] ?></td>
  <td><?= $item['user_id'] ?></td>
  <td>
    <?php
    $status= array('0'=>0,'1' =>1 ,'2'=>2,'3'=>3,'4'=>4,'5'=>5 );
    ?>
    <select onchange="this.form.submit()" name="sel[<?= $item['id'] ?>]">
    <?php foreach($status as $sta => $val){
    ?>
    <option value="<?php echo $sta; ?>" <?php if($sta==$item['status'])echo 'selected' ?> ><?= $val ?></option>
    <?php }?>
    </select>

  </td>
  <td><?= $item['factor_id'] ?></td>
  <td><a href="<?= URL.'cp/edit_order/'.$item['id'] ?>">view<a></td>
</tr>
</tr>
<?php
}
?>
</table>
</form>
</div>

</div>
</div>
</div>

<?php
echo'<pre>';

print_r($data);
echo'</pre>';

?>
