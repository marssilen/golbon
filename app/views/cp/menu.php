
   
    
<form method="POST" action="">
    <input type="submit" name="submit" value="insert"/>
</form>
   
 
<table class="table table-striped">
    <thead>
      <tr>
        <th>لیست منو</th>
      </tr>
    </thead>
    <tbody>
       
    <?php foreach($data as $menu){?>
      <tr>
    <form method="POST" action="">
        <td><input type="hidden" name="id" value="<?= $menu['id'] ?>"/><label><?= $menu['id'] ?></label></td>
        <td> <input name="menu" placeholder="menu" value="<?= $menu['menu'] ?>"/></td>
        <td> <input name="parent" placeholder="parent" value="<?= $menu['parent'] ?>"/></td>
        <td>  <input name="href" placeholder="href" value="<?= $menu['href'] ?>"/></td>
        <td>  <input type="submit" name="submit" value="change"/></td>
    </form>
    <td><form method="POST" action=""><input type="hidden" name="id" value="<?= $menu['id'] ?>"/><input type="submit" name="submit" value="Remove"/></form></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>