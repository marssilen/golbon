<?php
class Item extends Controller
{
	public function index($name='')
	{
// 		$factor_id=$this->formModel->get_factor($user_id);
// 		$factor_id=Session::get('factor_id');
// 		if(isset($_POST['submit'])){
// 			$num=1;
			// $this->formModel->add_item_to_factor($factor_id,$name,$num);
// 		}
		$data=$this->formModel->get($name);
		$this->view('item/index',$data[0]);
	}
	public function get($name='')
	{
		$this->formModel->get();
	}
  public function add_to_favorite($item_id) {
    $user_id= Session::get('id');
    $this->formModel->add_to_favorite($item_id,$user_id);
  }
}
