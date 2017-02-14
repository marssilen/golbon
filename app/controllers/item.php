<?php
class Item extends Controller
{
	public function index($name='')
	{
		$data=$this->formModel->get($name);
		$this->view('item/index',$data[0]);
	}
	// public function get($name='')
	// {
	// 	$this->formModel->get();
	// }
	public function sf()
	{
		// if(isset($_POST['submit'])){
			if($this->is_login){
			$name=$_POST['id'];
				$user_id= Session::get('id');
				$factor_id=$this->formModel->get_factor($user_id);
				$factor_id=Session::get('factor_id');
				$num=1;
				$this->formModel->add_item_to_factor($factor_id,$name,$num);
				echo '{ "st": "added to basket" }';
			}else {
				echo '{ "st": "please login" }';
			}
		// }
	}
  public function add_to_favorite() {
		if($this->is_login){
	    $user_id= Session::get('id');
			$item_id=$_POST['id'];
	    $this->formModel->add_to_favorite($item_id,$user_id);
			echo '{ "st": "added to favorites" }';
		}else{
			echo '{ "st": "please login" }';
		}
  }
}
