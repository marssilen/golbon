<form method="post">
<label for="cat"><?php echo $data['id']; ?></label>
<input name="cat" value="<?php echo $data['cat']; ?>">
<input name="pa" value="<?php echo $data['pa_cat']; ?>">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
<button type="submit" name="cat_change">change</button>
</form>