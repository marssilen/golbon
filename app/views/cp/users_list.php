<form action="" method="post" class="w3-padding-16"><label for="search">search by code</label><input type="text" id="search" name="search"></form>
<?php
/*echo'<pre>';
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
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $user){?>
      <tr>
        <td><?= $user['id'] ?></td>
        <td><a href="edit_user/<?= $user['id'] ?>"><?= $user['username'] ?></a></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['role'] ?></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>