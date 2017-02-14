<?php
function display($msg){
  echo htmlentities($msg);
}
function thumb($source,$width=150,$height=150){
  $detail=getimagesize($source);
  $res=imagecreatefromjpeg($source);
  $thumb=imagecreatetruecolor($width,$height);
  imagecopyresampled($thumb,$res,0,0,0,0,$width,$height,$detail[0],$detail[1]);

  $name=basename($source);
  $suc=imagejpeg($thumb,'public\th\\'.$name.'.jpg',100);
  imagedestroy($res);
  imagedestroy($thumb);
  return $suc;
}
// thumb('C:\web\xampp\htdocs\golbon\public\w3.css');
// 	$files=new DirectoryIterator('public/th/');
// 	foreach ($files as $file) {
// 	  if($file=='.'||$file=='..')
// 	  continue;
// 	  echo('<div class="w3-col l2 m3 s6" style="padding:16px"><div style="padding:6px" class="mycard w3-card-2 w3-round"><img style="width:100%" src="'.URL.'public/th/'.$file.'" >'.$file.'</div></div>');
// 	}
