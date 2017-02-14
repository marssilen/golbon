<?php
class Home extends Controller
{
	public function index()
	{
		$this->is_login= $this->is_login();
		$this->view('home/index',[]);
	}
	// public function load_item($index=''){
	// 	echo '<html><head>';
	// 	require_once('app/views/head.php');
	// 	echo '</head><body>';
	// 	$files=new DirectoryIterator('public/th/');
	// 	foreach ($files as $file) {
	// 	  if($file=='.'||$file=='..')
	// 	  continue;
	// 	  echo('<div class="w3-col l2 m3 s6" style="padding:16px"><div style="padding:6px" class="mycard w3-card-2 w3-round"><img style="width:100%" src="'.URL.'public/th/'.$file.'" >'.$file.'</div></div>');
	// 	}
	// 	echo '</body></html>';
	// }
}
