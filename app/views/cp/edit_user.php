<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit User</title>
</head>
<body>
<div class="container">
  <form class="form-horizontal" role="form" method="post" action="">
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">username:</label>
      <div class="col-sm-10">
        <p class="form-control-static"><?= (isset($data['username']))?$data['username']:'' ?></p>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input name="email" type="email" class="form-control" placeholder="Enter email" value="<?= (isset($data['email']))?$data['email']:'' ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input name="pass" type="" class="form-control" id="pwd" placeholder="Enter password" value="<?= (isset($data['password']))?$data['password']:'' ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">phone:</label>
      <div class="col-sm-10">
        <input name="tel" type="tel" class="form-control" id="pwd" placeholder="" value="<?= (isset($data['phone']))?$data['phone']:'' ?>">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">role:</label>
      <div class="col-sm-10">
      <select name="role" class="form-control" id="sel1">
        <option <?=(isset($data['role']) and $data['role']=='admin')?'selected':'' ?> >admin</option>
        <option <?=(isset($data['role']) and $data['role']=='standard')?'selected':'' ?> >standard</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">block:</label>
      <div class="col-sm-10">
      <select name="block" class="form-control" id="sel1">
        <option <?=(isset($data['block']) and $data['block']=='1')?'selected':'' ?> value="1" >true</option>
        <option <?=(isset($data['block']) and $data['block']=='0')?'selected':'' ?> value="0" >false</option>
      </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button name="sub" value="submit" type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>


</body>
</html>
