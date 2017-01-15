<?php
class Home extends Controller 
{
	public function index($name='')
	{
		$user=$this->model('Home_m');
		echo $name;
		$this->view('home/index',[]);
	}
	public function load_item($index=''){
		$this->view('home/load_item');
	}
}
