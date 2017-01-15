 <table class="table table-striped">
    <thead>
      <tr>
        <th>item</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $comment){?>
      <tr>
        <td><a href="<?= URL.'item/'.$comment['item_id'] ?>"><?= $comment['item_id'] ?></a></td>
      </tr>
      
      <?php } ?>
    </tbody>
  </table>