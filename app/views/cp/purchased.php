<form action="" method="post" class="w3-padding-16"><label for="search">search by code</label><input type="text" id="search" name="search"></form>
<?php
echo'<pre>';

print_r($data);
echo'</pre>';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <table class="table table-striped">
    <thead>
      <tr>
        <th>item</th>
        <th>user</th>
        <th>status</th>
        <th>code</th>
        <th>view</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $item){?>
      <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['send_status'] ?></td>
        <td><?= $item['code'] ?></td>
        <td><a href="<?= URL.'cp/edit_order/'.$item['id'] ?>">view<a></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>