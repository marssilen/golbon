<?php
class Item extends ControllerPanel 
{
	protected $formModel;
	function __construct(){
		parent::__construct();
		$this->formModel=$this->model('Item_m');
	}
	public function index($name='')
	{
		$user_id= Session::get('id');
		$factor_id=$this->formModel->get_factor($user_id);
		$factor_id=Session::get('factor_id');
		if(isset($_POST['submit'])){
			echo 'post';
			$num=isset($_POST['num'])?$_POST['num']:1;
			$this->formModel->add_item_to_factor($factor_id,$name,$num);
		}
		$data=$this->formModel->get($name);
		$this->view('item/index',$data[0]);
	}
	public function get($name='')
	{
		$this->formModel->get();
	}
}
