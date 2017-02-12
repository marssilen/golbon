<?php
class Home extends Controller
{
	public function index($name='')
	{
		// $user=$this->model('Home_m');
		// echo $name;
		$this->formModel=$this->model('Item_m');
		$menu=$this->formModel->get_menu();
		$data[0]['menu']=$menu;
		$this->view('home/index',$data[0]);
	}
	public function load_item($index=''){
		$this->view('home/load_item');
	}
}
