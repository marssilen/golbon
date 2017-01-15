<?php

$max = 9951200*6;
$destination = 'upload/';
$upload = new Upload($destination);
if(isset($_POST['submit'])){
	try {
		$upload->setMaxSize($max);
		$upload->move();
		$result_upload = $upload->getMessages();
		$imagename=$upload->get_imagename();
		$success_upload=$upload->get_success_result();
		echo $success_upload ?' y':'n';echo $imagename;
	} catch (Exception $e) {
	echo $e->getMessage();
  }
  
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>uf Document</title>
</head>

<body>
<form method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max; ?>">
<input name="image" type="file" id="image_upload">
<br> 
<button type="submit" name="submit" value="submit">submit</button>
</form>
</body>
</html>